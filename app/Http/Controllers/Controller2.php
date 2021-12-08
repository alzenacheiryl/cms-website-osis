<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller2 extends Controller
{
    //
    public function login(){
        return view('login.login',[
            'title' => 'login'
        ]);
    }
}
