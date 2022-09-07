<?php

namespace App\Http\Controllers\Scholar;

use Hashids\Hashids;
use App\Models\Scholar;
use App\Models\ScholarEnrollment;
use App\Models\BenefitList;
use App\Models\BenefitRelease;
use App\Models\EnrolledList;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Scholar\IndexResource;
use App\Http\Resources\Scholar\BenefitResource;
use App\Http\Resources\Scholar\Sub\EnrollmentResource;

class ProfileController extends Controller
{
    public function index($id,$type){
        $hashids = new Hashids('krad',10);
        $id = $hashids->decode($id);
        $data = new IndexResource(Scholar::with('profile','education.school','profile.address.region','profile.address.province','profile.address.municipality','profile.address.barangay')->where('id',$id)->first());

        switch($type){
            case 'profile':
                return inertia('Scholars/View/Modules/Profile',['user' => $data]);
            break;
            case 'benefit':
                return inertia('Scholars/View/Modules/Benefit',['user' => $data]);
            break;
            case 'enrollment':
                return inertia('Scholars/View/Modules/Enrollment',['user' => $data]);
            break;
            case 'employment':
                return inertia('Scholars/View/Modules/Employment',['user' => $data]);
            break;
            case 'prospectus':
                return inertia('Scholars/View/Modules/Prospectus',['user' => $data]);
            break;
        }
    }

    public function show(Request $request){
        switch($request->type){
            case 'profile':
               
            break;
            case 'benefit':
                return $this->benefit($request);
            break;
            case 'enrollment':
                return $this->enrollment($request);
            break;
            case 'employment':
               
            break;
            case 'prospectus':
               
            break;
        }
    }

    public function enrollment($request){
        $hashids = new Hashids('krad',10);
        $id = $hashids->decode($request->id);

        $data = ScholarEnrollment::with('lists')->where('scholar_id',$id)
            ->when($request->keyword, function ($query, $keyword) {
                $query->whereHas('semester',function ($query) use ($keyword) {
                    $query->where('academic_year', 'LIKE', '%'.$keyword.'%');
                });
            })
            ->orderBy('created_at','DESC')
            ->paginate($request->counts)
            ->withQueryString();
        return EnrollmentResource::collection($data);
    }

    public function benefit($request){
        $hashids = new Hashids('krad',10);
        $id = $hashids->decode($request->id);

        $data = EnrolledList::with('semester.benefits.benefit','semester.benefits.status','semester.semester')
        ->where('scholar_id',$id)
        ->whereHas('benefits',function ($query) use ($id) {
            $query->where('scholar_id',$id);
        })
        // $data = BenefitRelease::with('benefits.benefit')
        //     // ->when($request->keyword, function ($query, $keyword) {
        //     //     $query->whereHas('semester',function ($query) use ($keyword) {
        //     //         $query->where('academic_year', 'LIKE', '%'.$keyword.'%');
        //     //     });
        //     // })
        //     ->whereHas('benefits',function ($query) use ($id) {
        //         $query->where('scholar_id',$id);
        //     })
        //     ->orderBy('created_at','DESC')
            ->paginate($request->counts)
            ->withQueryString();
        return BenefitResource::collection($data);
    }
}
