<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use App\PA;
use Illuminate\Support\Facades\DB;
use Session;



class pa_standard extends Model
{
    
    protected $table = 'pa_standard';
    
    
    function find_standard($id){
         $standard = pa_standard::where('root',$id)
                ->orderBy('no', 'asc')->get();
         return $standard;
    }
    
    
    static function  getuser_score($user_id,$PA_year,$root,$sub){
        
        $response = Http::post('https://thaisupra-laravel.topwork.asia/thaisupra_api/public/api/pa_standard_score', [
                    'user_id' => $user_id,
                    'PA_year' => $PA_year,
                    'root' => $root,
                    'sub' => $sub
        ]);
       

        $score = json_decode($response, true);
        
        return $score["score"];
        
    }
    
    
        static function  getuser_score_sum($user_id,$PA_year,$root){
        
        $response = Http::post('https://thaisupra-laravel.topwork.asia/thaisupra_api/public/api/Pa_standard_score_sumary', [
                    'user_id' => $user_id,
                    'PA_year' => $PA_year,
                    'root' => $root
        ]);
       

        $score = json_decode($response, true);
        
        return $score["score"];
        
    }
}
