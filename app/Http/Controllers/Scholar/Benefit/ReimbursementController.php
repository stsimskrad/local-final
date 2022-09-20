<?php

namespace App\Http\Controllers\Scholar\Benefit;

use App\Models\BenefitList;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ReimbursementRequest;
use App\Http\Traits\UploadTrait;
use App\Http\Resources\DefaultResource;
use App\Http\Resources\Scholar\ReimbursementResource;

class ReimbursementController extends Controller
{
    use UploadTrait;

    public function index(Request $request){
        $data = BenefitList::with('status:id,name',
        'benefit:id,name',
        'scholar:id,profile_id',
        'scholar.profile:id,firstname,lastname,middlename',
        'semester:id,semester_id,academic_year','semester.semester:id,name')
        ->where('is_reimbursed',true)->where('status_id',55)
        ->orderBy('id','ASC')
        ->paginate($request->count)
        ->withQueryString();
        return ReimbursementResource::collection($data);
    }

    public function store(ReimbursementRequest $request){
        $data = \DB::transaction(function () use ($request){
            $attachment = [];
            return $data = BenefitList::create(
                array_merge($request->all(),[
                    'attachment' => json_encode($this->reimburse($request)),
                    'status_id' => 55,
                    'release_type' => 'Full',
                    'month' => date("Y").'-'.date("m").'-1',
                    'is_reimbursed' => true
                ])
            );
        });

        return back()->with([
            'message' => 'Reimbursement created successfully. Thanks',
            'data' => new DefaultResource($data),
            'type' => 'bxs-check-circle'
        ]); 
    }
}
