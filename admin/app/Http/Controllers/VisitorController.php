<?php

namespace App\Http\Controllers;

use App\Models\VisitorModel;


class VisitorController extends Controller {
    public function VisitorIndex() {

        $VisitorDatas = json_decode(VisitorModel::orderby('id','desc')->take(6)->get());
        
        return view( 'visitor', ['visitor_datas' => $VisitorDatas] );
    }
}
