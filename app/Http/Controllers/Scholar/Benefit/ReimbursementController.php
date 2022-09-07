<?php

namespace App\Http\Controllers\Scholar\Benefit;

use App\Models\BenefitList;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ReimbursementRequest;
use App\Http\Traits\UploadTrait;
use App\Http\Resources\DefaultResource;

class ReimbursementController extends Controller
{
    use UploadTrait;

    public function store(ReimbursementRequest $request){
        $data = \DB::transaction(function () use ($request){
            $attachment = [];
            return $data = BenefitList::create(
                array_merge($request->all(),[
                    'attachment' => json_encode($this->reimburse($request)),
                    'status_id' => 55,
                    'release_type' => 'Full',
                    'month' => date("Y").'-'.date("m").'-1'
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
