<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controller1 extends Controller
{
    //
    public function dashboard(){
        return view('index');
    }
    public function dashboard2(){
        return view('index-2');
    }
}
