<?php

namespace App\Http\Controllers\Accounting;

use App\Models\Allotment;
use App\Models\ListExpense;
use App\Models\Disbursement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AllotmentRequest;
use App\Http\Requests\DisbursementRequest;
use App\Http\Resources\Accounting\AllotmentResource;
use App\Http\Resources\Accounting\DisbursementResource;


class IndexController extends Controller
{
    public function index(Request $request){
        if($request->search){
            if($request->type == 'Allotment'){
                return $this->allotment($request);
            }else{
                return $this->disbursement($request);
            }
        }else{
            return inertia('Accounting/Index');
        }
    }

    public function store(Request $request){
        if($request->type == 'disbursement'){
            $data = \DB::transaction(function () use ($request){
                if($request->editable){
                    $data = Disbursement::findOrFail($request->id);
                    $data->update($request->except('editable'));
                    return $data;
                }else{
                    $data = Disbursement::create(array_merge($request->all(),['added_by' => \Auth::user()->id]));
                    $data = Disbursement::with('expense')->where('id',$data->id)->first();
                    return $data;
                }
            });

            return back()->with([
                'message' => 'Disbursement added successfully. Thanks',
                'data' => new DisbursementResource($data),
                'type' => 'bxs-check-circle'
            ]); 
        }
    }

    public function show($type){
       
    }

    public function disbursement($request){
        $data = Disbursement::query()
            ->with('expense')->with('user.profile')
            ->orderBy('created_at','DESC')
            ->paginate($request->count)
            ->withQueryString();

        return DisbursementResource::collection($data);
    }

    public function allotment($request){
        $data = Allotment::query()
            ->orderBy('created_at','DESC')
            ->paginate($request->count)
            ->withQueryString();

        return AllotmentResource::collection($data);
    }

    public function create(Request $request){
        $year = date('Y',strtotime($request->year));
        $quater = $request->quarter;

        switch($quater){
            case '1st Quarter': 
                $quater = 1;
            break;
            case '2nd Quarter': 
                $quater = 2;
            break;
            case '3rd Quarter': 
                $quater = 3;
            break;
            case '4th Quarter': 
                $quater = 4;
            break;
        }
        
        $expenses = ListExpense::
        with(["allotments" => function($query) use ($year){
            $query->whereHas('allotment',function ($query) use ($year){
                $query->whereMonth('credited_at', '>=', '01')->whereMonth('credited_at', '<=', '03')->whereYear('credited_at',$year);
            });
        }])->withCount(['allotments AS allotment_sum' => function ($query) use ($year) {
            $query->whereHas('allotment',function ($query) use ($year){
                $query->whereMonth('credited_at', '>=', '01')->whereMonth('credited_at', '<=', '03')->whereYear('credited_at',$year);
            })->select(\DB::raw("SUM(amount) as sum"));
        }])->with(["disbursements" => function($query) use ($year){
            $query->whereMonth('created_at', '>=', '01')->whereMonth('created_at', '<=', '03')->whereYear('created_at',$year);
        }])->withCount(['disbursements AS disbursement_sum' => function ($query) use ($year){
                $query->select(\DB::raw("SUM(amount) as sum"));
                $query->whereMonth('created_at', '>=', '01')->whereMonth('created_at', '<=', '03')->whereYear('created_at',$year);
            }
        ])
        ->with(["balances" => function($query) use ($year){
            $query->whereMonth('created_at', '>=', '10')->whereMonth('created_at', '<=', '12')->whereYear('created_at',$year-1);
        }])->withCount(['balances AS balance_sum' => function ($query) use ($year){
                $query->select(\DB::raw("SUM(amount) as sum"));
                $query->whereMonth('created_at', '>=', '10')->whereMonth('created_at', '<=', '12');
                $query->whereYear('created_at',$year-1);
            }
        ])
        ->get();

        $query = Allotment::query();
        switch($quater){
            case 1:
                $query->whereMonth('credited_at', '>=', '01')->whereMonth('credited_at', '<=', '03');
            break;
            case 2:
                $query->whereMonth('credited_at', '>=', '04')->whereMonth('credited_at', '<=', '06');
            break;
            case 3:
                $query->whereMonth('credited_at', '>=', '07')->whereMonth('credited_at', '<=', '09');
            break;
            case 4:
                $query->whereMonth('credited_at', '>=', '10')->whereMonth('credited_at', '<=', '12');
            break;
        }
        $query->withCount([
        'lists AS lists_sum' => function ($query) {
                $query->select(\DB::raw("SUM(amount) as sum"));
            }
        ]);
        $allotments = $query->whereYear('credited_at',$year)->get();
        
        $array = [
            'allotments' => $allotments,
            'expenses' => $expenses
        ];

        return $array;
    }
}
