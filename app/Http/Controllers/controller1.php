<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controller1 extends Controller
{
    //
    public function dashboard(){
        return view('dashboard');
    }
    public function event(){
        return view('event');
    }
    public function welcome(){
        return view('welcome');
    }
    public function infolomba(){
        return view('infolomba');
    }
    public function programkerja(){
        return view('programkerja');
    }
}
