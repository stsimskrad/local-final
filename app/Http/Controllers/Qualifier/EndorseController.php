<?php

namespace App\Http\Controllers\Qualifier;

use App\Models\Qualifier;
use App\Models\ListAgency;
use App\Models\SchoolCampus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EndorseController extends Controller
{
    public function index(){
        $region_code = $this->agency();
        try{
            $url = 'http://stsims.main/api/endorsements/'.$region_code;
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            return $datas = response()->json(json_decode($response));
            // $datas = json_decode($response);
           
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

    public function agency(){
        $agency_id = config('app.agency');
        $agency = ListAgency::where('id',$agency_id)->first();
        return $region_code = $agency->region_code;
    }

    public function school($id){
        $data = SchoolCampus::with('municipality.province.region')->where('id',$id)->first();
        return $data->municipality->province->region->code;
    }
}
