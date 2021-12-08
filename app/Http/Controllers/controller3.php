<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controller3 extends Controller
{
    //
    public function register(){
        return view('register.register',[
            'title' => 'register'
        ]);
    }
    public function store(){
        request()->all(); 
    }
}
