<?php

namespace App\Http\Controllers;

class HomeController extends Controller {
    public function HomeIndex() {

        return view( 'home' );
    }
}
