<?php

namespace App\Http\Traits;

use App\Models\ListCourse;
use App\Models\ListAgency;
use App\Models\ListDropdown;
use App\Models\ListProgram;
use App\Models\SchoolCampus;
use App\Models\ScholarAddress;
use App\Models\ProfileAddress;
use App\Models\LocationProvince;
use App\Models\LocationBarangay;
use App\Models\LocationMunicipality;
use App\Http\Resources\DefaultResource;

trait AddressTrait {
   
    // public function searchAddress1($province,$address,$barangay,$id){
    //     $is_within = 1;
    //     $agency_id = config('app.agency');
    //     $agency = ListAgency::with('region')->where('id',$agency_id)->pluck('region_code');


    //     $bar = LocationBarangay::where(function($query) use ($barangay) {  
    //         $query->where('name','LIKE', '%'.$barangay.'%')->orWhere('old_name','LIKE', '%'.$barangay.'%');
    //     })
    //     ->whereHas('municipality',function ($query) use ($agency) {
    //         $query->whereHas('province',function ($query) use ($agency) {
    //             $query->whereHas('region',function ($query) use ($agency) {
    //                 $query->where('region_code',$agency);
    //             });
    //         });
    //     })->first();

    //     if($bar == null){
    //         $b = null;
    //         $mun = LocationMunicipality::where(function($query) use ($address) {  
    //             $query->where('name','LIKE', '%'.$address.'%')->orWhere('old_name','LIKE', '%'.$address.'%');
    //         })->whereHas('province',function ($query) use ($agency) {
    //             $query->whereHas('region',function ($query) use ($agency) {
    //                 $query->where('region_code',$agency);
    //             });
    //         })->first();

    //         if($mun == null){
    //             $m = null;
    //             $pro = LocationProvince::where(function($query) use ($province) {  
    //                 $query->where('name','LIKE', '%'.$province.'%')->orWhere('old_name','LIKE', '%'.$province.'%');
    //             })->whereHas('region',function ($query) use ($agency) {
    //                 $query->where('region_code',$agency);
    //             })->first();

    //             if($pro == null){
    //                 $p = null;
    //                 $r = null;
    //             }else{
    //                 $m = $pro->code;
    //                 $r = $pro->region->code;
    //             }
    //         }else{
    //             $m = $mun->code;
    //             $p = $mun->province->code;
    //             $r = $mun->province->region->code;
    //         }
    //     }else{
    //         $b = $bar->code;
    //         $m = $bar->municipality->code;
    //         $p = $bar->municipality->province->code;
    //         $r = $bar->municipality->province->region->code;
    //     }

    //     $address = [
    //         'type' => 'Main',
    //         'is_within' => $is_within,
    //         'barangay_code' => $b,
    //         'municipality_code' => $m,
    //         'province_code' => $p,
    //         'region_code' => $r,
    //         'profile_id' => $id,
    //         'created_at' => now(),
    //         'updated_at' => now()
    //     ];
    //     $a = ProfileAddress::insertOrIgnore($address);
    // }

    public function searchAddress($province,$municipality,$barangay,$id,$filter){
        
        if($filter){
            $is_within = 1;
            $agency_id = config('app.agency');
            $agency = ListAgency::with('region')->where('id',$agency_id)->pluck('region_code');
        }else{
            $is_within = 0;
            $agency = null;
        }

        $data = $this->barangay($barangay,$agency);
        if($data == null){
            $is_completed = 0;
            $data = $this->municipality($municipality,$agency);
            if($data == null){
                if($province != null){
                    $data = $this->province($province,$agency);
                    if($data == null){
                        return null;
                    }
                }else{
                    return null;
                }
            }
        }else{
            $is_completed = 1;
        }

        $address = [
            'type' => 'Main',
            'is_within' => $is_within,
            'barangay_code' => $data['b'],
            'municipality_code' => $data['m'],
            'province_code' => $data['p'],
            'region_code' => $data['r'],
            'profile_id' => $id,
            'is_completed' => $is_completed,
            'created_at' => now(),
            'updated_at' => now()
        ];
        $a = ProfileAddress::insertOrIgnore($address);
        return true;
    }

    public function barangay($barangay,$agency){
        $query = LocationBarangay::query();
        $query->where(function($query) use ($barangay) {  
            $query->where('name','LIKE', '%'.$barangay.'%')->orWhere('old_name','LIKE', '%'.$barangay.'%');
        });
        if($agency != null){
            $query->whereHas('municipality',function ($query) use ($agency) {
                $query->whereHas('province',function ($query) use ($agency) {
                    $query->whereHas('region',function ($query) use ($agency) {
                        $query->where('region_code',$agency);
                    });
                });
            });
        }
        $data = $query->first();

        if($data != null){
            return $array = [
                'b' => $data->code,
                'm' => $data->municipality->code,
                'p' => $data->municipality->province->code,
                'r' => $data->municipality->province->region->code
            ];
        }else{
            return null;
        }
    }

    public function municipality($municipality,$agency){
        $query = LocationMunicipality::query();
        $query->where(function($query) use ($municipality) {  
            $query->where('name','LIKE', '%'.$municipality.'%')->orWhere('old_name','LIKE', '%'.$municipality.'%');
        });
        if($agency != null){
            $query->whereHas('province',function ($query) use ($agency) {
                $query->whereHas('region',function ($query) use ($agency) {
                    $query->where('region_code',$agency);
                });
            });
        }
        $data = $query->first();

        if($data != null){
            return $array = [
                'b' => null,
                'm' => $data->code,
                'p' => $data->province->code,
                'r' => $data->province->region->code
            ];
        }else{
            return null;
        }
    }

    public function province($province,$agency){
        $query = LocationProvince::query();
        $query->where(function($query) use ($province) {  
            $query->where('name','LIKE', '%'.$province.'%');
        });
        if($agency != null){
            $query->whereHas('region',function ($query) use ($agency) {
                $query->where('region_code',$agency);
            });
        }
        $data = $query->first();

        if($data != null){
            return $array = [
                'b' => null,
                'm' => null,
                'p' => $data->code,
                'r' => $data->region->code
            ];
        }else{
            return null;
        }
    }
}