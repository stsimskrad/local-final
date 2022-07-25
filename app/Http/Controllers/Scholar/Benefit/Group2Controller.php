<?php

namespace App\Http\Controllers\Scholar\Benefit;

use App\Models\Scholar;
use App\Models\ListBenefit;
use App\Models\Group;
use App\Models\GroupList;
use App\Models\GroupBenefit;
use App\Models\GroupRelease;
use App\Models\GroupScholar;
use App\Models\GroupMonth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ReleaseRequest;
use App\Http\Resources\Benefit\ListResource;
use App\Http\Resources\Benefit\Group\IndexResource;
use App\Http\Resources\Benefit\Group\GroupResource;
use App\Http\Resources\Scholar\Sub\MonthResource;

class Group2Controller extends Controller
{
    public function index(Request $request){
        if($request->search){
            $data = Group::with('semester')
            ->when($request->keyword, function ($query, $keyword) {
                $query->where('academic_year', 'LIKE', '%'.$keyword.'%');
            })
            ->paginate(9)->withQueryString();
            return $data;
        }else{
            return inertia('Benefits2/Index');
        }
    }

    public function store(ReleaseRequest $request){
        $data = \DB::transaction(function () use ($request){
            $attachment = [];
            $month = date("Y").'-'.date("m").'-1';
            $count = count($request['month']['releases'])+1;

            $gm = GroupMonth::where('month',$month)->first();
            if($gm == null){
                $gm = new GroupMonth;
                $gm->month = $month;
                $gm->group_id = $request['group']['id'];
                $gm->save();
            }

                $data = GroupRelease::create(array_merge($request->all(),['month_id' => $gm->id,'number' => $count,'month' => $month,'attachment' => json_encode($attachment),'added_by' => \Auth::user()->id]));
                foreach($request->lists as $list){
                    foreach($list['benefits'] as $benefit){
                        $gs = GroupScholar::where('scholar_id',$benefit['scholar_id'])->first();
                
                        if($gs == null){
                            $gs = new GroupScholar;
                            $gs->scholar_id = $benefit['scholar_id'];
                            $gs->release_id = $data->id;
                            $gs->total = $list['total'];
                            $gs->save();
                        }

                        $b = GroupBenefit::where('id',$benefit['id'])->first();
                        $b->status_id = 50;
                        $b->release_id = $gs->id;
                        $b->group_id = $request['group']['id'];
                        $b->save();
                        // if($benefit['name'] != 'Others'){
                        //     if($benefit['amount'] != 0 || $benefit['amount'] != '0'){
                        //         $lists = new FinancialGroupMonthReleaseScholarList;
                        //         $lists->benefit_id = $benefit['id'];
                        //         $lists->scholar_id = $scholar->id;
                        //         $lists->amount = $benefit['amount'];
                        //         $lists->release_type = 'Full';
                        //         $lists->save();
                        //     }
                        // }else{
                        //     foreach($benefit['lists'] as $other){
                        //         $lists = new FinancialGroupMonthReleaseScholarList;
                        //         $lists->benefit_id = $other['id'];
                        //         $lists->scholar_id = $scholar->id;
                        //         $lists->amount = $other['amount'];
                        //         $lists->release_type = 'Full';
                        //         $lists->save();
                        //     }
                        // }
                    }

                    // $isko = FinancialGroupList::where('id',$list['scholar']['id'])->first();
                    // $isko->count = $tot = $isko->count + $list['multiplier'];
                    // $isko->is_first = 0;
                    // ($tot == 5) ? $isko->is_completed = 1 : '';
                    // $isko->save();
                }
            return $data;
        });

        return back()->with([
            'message' => 'Released was successfull. Thanks',
            'data' =>  $data,
            'type' => 'bxs-check-circle'
        ]); 
    }

    public function create(Request $request){
        switch($request->type){
            case 'lists':
                return $this->lists();
            break;
            case 'benefits':
                return $this->benefits($request->info);
            break;
            case 'view':
                return $this->view($request->id);
            break;
        }
    }

    public function update(Request $request){
        $data = \DB::transaction(function () use ($request){
            if($request->editable){
                $data = Group::findOrFail($request->id);
                $data->update($request->except('editable'));
                return $data;
            }else{
                $data = Group::create($request->all());
                return $data;
            }
        });

        return back()->with([
            'message' => 'Group created successfully. Thanks',
            'data' =>  $data,
            'type' => 'bxs-check-circle'
        ]); 
    }

    public function lists(){
        $group = Group::with('semester')
        ->with('lists.scholar:id,spas_id,status_id,profile_id','lists.scholar.status','lists.scholar.profile:id,user_id,firstname,lastname,middlename,email','lists.scholar.profile.user:id,avatar')
        ->with('lists')
        ->where('is_active',1)
        ->orderBy('created_at','DESC')->first();
        
        if($group != NULL){

            $month = GroupMonth::with('group.semester')->with('releases')->where('group_id',$group->id)->whereMonth('month',date('m'))->first();
            if(!$month){
                $date = date("Y").'-'.date("m").'-1';
                $new = new GroupMonth;
                $new->group_id = $group->id;
                $new->month = $date;
                $new->save();
                $month = GroupMonth::with('group.semester')->with('releases')->orderBy('created_at','DESC')->first();
            }
            $month_id = $month->id;

            // $pending = GroupScholar::whereHas('release',function ($query) use ($month_id) {
            //     $query->whereHas('month',function ($query) use ($month_id) {
            //         $query->where('month_id',$month_id);
            //     });
            // })->pluck('scholar_id');
            $date = date("Y").'-'.date("m").'-1';
            $pending = GroupBenefit::where('status_id',49)->where('month',$date)->pluck('scholar_id');

            $data = [
                'group' => new IndexResource($group),
                'month' => [
                    'name' => new MonthResource($month),
                    'pending' => $pending, //GroupList::where('group_id',$group->id)->pluck('scholar_id')
                    // Scholar::with('profile')->withWhereHas('benefits', function ($query) use ($month) {
                    //     $query->where('status_id',49)->where('month','<=',$month);
                    // })->pluck('id'),
                    // 'releases' => GroupRelease::where('group_id',$group->id)->get()
                ],
                'total' => GroupBenefit::where('status_id',50)->where('group_id',$group->id)->sum('amount'),
                'monthly' => GroupRelease::whereYear('created_at',now()->year)->whereMonth('created_at',now()->month)->sum('total'),
                
                // 'lists' => count($group->lists),
            ];

            return $data;
        }else{
            return 'empty';
        }
    }

    public function benefits($info){
        $scholars = (!empty(json_decode($info))) ? json_decode($info) : NULL;
        $month = date("Y").'-'.date("m").'-1';
        $data = Scholar::with('profile')->with('benefits.benefit')
        ->withWhereHas('benefits', function ($query) use ($month) {
            $query->where('status_id',49)->where('month','<=',$month);
        })
        ->whereIn('id',$scholars)
        ->get();

        return ListResource::collection($data);


        // $scholars = (!empty(json_decode($info))) ? json_decode($info) : NULL;
        // $is_summer = 0; $overall = 0;
        // $array = [];

        // foreach($scholars as $id){

        //     $list_benefits = ListBenefit::where('is_summer',$is_summer)->get();
            
        //     $scholar = FinancialGroupList::with('group.semester')->where('id',$id)->first();

        //     $this_month = date('m'); //CHANGE TO TEST
        //     $start_month = date("m",strtotime($scholar->start_at)); 

        //     $is_first = $scholar->is_first; // first release
        //     $counter = $scholar->count; //received count for this month
        //     $is_hold = $scholar->is_hold; //if hold

        //     if($start_month == $this_month){ //check if no delay of releasing in a month || multiple for stipend
        //         $multiplier = 1;
        //     }else{
        //         if($is_first){
        //             if($this_month > $start_month){
        //                 $multiplier = ($this_month - $start_month) + 1;
        //             }else{
        //                 $multiplier = ((12 - $start_month) + 1) + $this_month;
        //             }
        //         }else{
        //             $multiplier = 1; //what if delayed?
        //         }
        //     }

        //     $isko = Scholar::with('education:id,scholar_id,level_id,school_id','education.level:id,name','education.school:id,school_id','education.school.school:id,class_id','education.school.school.class:id,name')
        //     ->where('id',$scholar->scholar_id)->first();
            
        //     $level = $isko->education->level->name;
        //     $school_type = $isko->education->school->school->class->name;
        //     $semester = $scholar->group->semester->name;

        //     $benefits = [1]; //stipend
        //     if($is_first){ // first release of the month
        //         array_push($benefits,2); // book allowance
        //         if($level == '1st' && $semester == 'First Semester'){ //if 1st yr and 1st semester
        //             array_push($benefits,4); //clothing
        //         }
        //         if($school_type == 'Private'){ // if private school
        //             array_push($benefits,3); // tuition
        //         }
        //     }
            
        //     $list_benefits = $list_benefits->whereIn('id',$benefits);
            
        //     $benefit_array = [
        //         ['id'=>'1','name'=>'Stipend','amount' => 0],
        //         ['id'=>'2','name'=>'Book Allowance','amount' => 0],
        //         ['id'=>'3','name'=>'Tuition','amount' => 0],
        //         ['id'=>'4','name'=>'Clothing','amount' => 0],

        //     ];
        //     $lists = []; $total = 0;
        //     foreach($list_benefits as $benefit){
        //         // if($benefit->id < 5){
        //             $benefit_array[$benefit->id-1]['amount'] = ($benefit->name == 'Stipend') ? $benefit->amount*$multiplier : $benefit->amount;
        //             $total += ($benefit->name == 'Stipend') ? $benefit->amount*$multiplier : $benefit->amount;
        //         // }else{
        //         //     $lists[] = [
        //         //         'id' => $benefit->id,
        //         //         'name' => $benefit->name,
        //         //         'amount' => ($benefit->name == 'Stipend') ? $benefit->amount*$multiplier : $benefit->amount
        //         //     ];
        //         //     $total += ($benefit->name == 'Stipend') ? $benefit->amount*$multiplier : $benefit->amount;
        //         // }
        //     }
        //     $overall += $total;

        //     // array_push($benefit_array,['name' => 'Others', 'amount' => (!empty($lists)) ? array_column($lists,'amount')[0] : '0','lists' => $lists]);

        //     $array [] = [
        //         'scholar' => new ListResource($scholar),
        //         'benefits' => $benefit_array,
        //         'total' => $total,
        //         'multiplier' => $multiplier
        //     ];
        // }
        // $array = [
        //     'total' => $overall,
        //     'lists' => $array
        // ];
        // return $array;
    }

    public function view($id){
        // $data = Group::with('releases.scholars.benefits')
        // ->with('lists.scholar:id,profile_id','lists.scholar.profile:id,lastname,firstname,middlename')
        // ->with('semester')->where('id',$id)->first();
        // return new GroupResource($data);
      $data = Group::with('months.releases.scholars.scholar:id,profile_id','months.releases.scholars.scholar.profile:firstname,lastname,middlename,id','months.releases.scholars.benefits.benefit')
        ->with('lists.scholar:id,profile_id','lists.scholar.profile:id,lastname,firstname,middlename')
        ->with('semester')->where('id',$id)->first();
        return new GroupResource($data);
    }
}
