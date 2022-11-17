<?php

namespace App\Http\Controllers;

use App\Models\VisitorModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function HomeIndex(){
        // IP Get
        $userIP = $_SERVER['REMOTE_ADDR'];
        //Date time
        date_default_timezone_set("Asia/Dhaka");
        $timeDate = date("Y-m-d h:i:sa");
        VisitorModel::insert(['ip_address'=>$userIP, 'visit_time'=>$timeDate]);


        return view('home');
    }
}
