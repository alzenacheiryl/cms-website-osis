<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controller1 extends Controller
{
    //
    public function dashboard(){
        return view('index');
    }
    public function event(){
        return view('event');
    }
    public function akunsiswa(){
        return view('akunsiswa');
    }
    public function tambahakun(){
        return view('tambahakun');
    }
    public function editakun(){
        return view('editakun');
    }
}
