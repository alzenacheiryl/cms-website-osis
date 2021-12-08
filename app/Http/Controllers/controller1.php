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
    public function akunsiswa(){
        return view('akunsiswa');
    }
    public function tambahakun(){
        return view('tambahakun');
    }
    public function editakun(){
        return view('editakun');
    }
    public function karyasiswa(){
        return view('karyasiswa');
    }
    public function infolomba(){
        return view('infolomba');
    }
    public function kritiksaran(){
        return view('kritiksaran');
    }
    public function programkerja(){
        return view('programkerja');
    }
}
