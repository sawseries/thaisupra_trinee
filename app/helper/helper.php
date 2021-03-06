<?php

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\PA;
use App\PA_year;
use App\user_edu_type;
use App\User_Profile;
use App\user_education;
use App\pa_schedule_hour;
use App\pa_support_hour;
use App\pa_develop_hour;
use App\pa_response_hour;
use App\pa_standard;
use App\pa_train_hour;
use App\pa_innovation;
use App\pa_learn_class;
use App\group_member;
use App\group_learn;
use App\teacher_academic;
use App\group_department;

function PA_year() {

    $year = DB::table('pa_year')->where('active', 1)->first();
    return $year->year;
}

function uId() {
    return session('uID');
}

function uAuth() {
    return session('uAuth');
}

function uFname() {
    return session('uFname');
}

function uLname() {
    return session('uLname');
}

function uLevel() {
    return session('uLevel');
}

function uAddress() {
    return session('uAddress');
}

function edu_nm($id) {

    $edu_nm = user_edu_type::find($id);
    return $edu_nm->name;
}

function group_department($id) {

    $department;
    if ($id == 'all') {
        $department = group_department::all();
    } else {
        $department = group_department::find($id);
    }
    return $department;
}

function standard($id) {
    $standard;
    if ($id == 'all') {
        $standard = pa_standard::where('root', 0)
                        ->orderBy('no', 'asc')->get();
    } else {
        $standard = pa_standard::where('root', 0)
                        ->where('id', $id)->first();
    }
    return $standard;
}

function group_learn($id) {
    $learn;
    if ($id == 'all') {
        $learn = group_learn::all();
    } else {
        $learn = group_learn::find($id);
    }
    return $learn;
}

function group_member($id) {
    $member;
    if ($id == 'all') {
        $member = group_member::all();
    } else {
        $member = group_member::find($id);
    }


    return $member;
}

function teacher_academic($id) {
    $academic;
    if ($id == 'all') {
        $academic = teacher_academic::all();
    } else {
        $academic = teacher_academic::find($id);
    }


    return $academic;
}

function datethai($date) {

    $date = explode("-", $date);

    $day = $date[2];
    $month = $date[1];
    $year = $date[0] + 543;

    return $day."  ". month($month)."  ".$year;
}


function datebref($date) {

    $date = explode("-", $date);

    $day = $date[2];
    $month =$date[1];
    $year = substr($date[0],2,2);

    return $day."/".$month."/".$year;
}



function month($months) {
    $month = "";
    switch ($months) {
        case '01' : $month = "??????????????????";
            break;
        case '02' : $month = "??????????????????????????????";
            break;
        case '03' : $month = "??????????????????";
            break;
        case '04' : $month = "??????????????????";
            break;
        case '05' : $month = "?????????????????????";
            break;
        case '06' : $month = "????????????????????????";
            break;
        case '07' : $month = "?????????????????????";
            break;
        case '08' : $month = "?????????????????????";
            break;
        case '09' : $month = "?????????????????????";
            break;
        case '10' : $month = "??????????????????";
            break;
        case '11' : $month = "???????????????????????????";
            break;
        case '12' : $month = "?????????????????????";
            break;
    }
    return $month;
}

function calage($date){
  $today = date('d-m-Y');
  
  
  $datestr = "";
  
  $day =  round(abs(strtotime($today) - strtotime($date))/60/60/24);
  
  $y =floor(abs($day/365));
  
  if($y>0){
      $datestr.=$y." "."?????? ";
  }
  
  $m = floor(abs($day%365)/30);
  
  if($m>0){
       $datestr.=$m." "."??????????????? "; 
  }
  
  $d = floor(abs($day%365)%30);
  
   if($d>0){
       $datestr.=$d." "."????????? "; 
   }
      return $datestr;
}
    
    
 function degree($score){
     
     if(($score>=1)&&($score<=1.5)){
         return "?????????????????????????????????";
     }else if(($score>=1.51)&&($score<=2.5)){
         return "???????????????";
     }else if(($score>=2.51)&&($score<=3.5)){
         return "?????????????????????";
     }else if(($score>=3.51)&&($score<=4.5)){
         return "??????";
     }else if(($score>=4.5)&&($score<=5)){
         return "???????????????";
     }
     
 } 
