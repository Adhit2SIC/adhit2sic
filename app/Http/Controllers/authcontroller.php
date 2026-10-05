<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authcontroller extends Controller
{
    public function login(Request $request){
       dd($request->all());

       $username = $request->input('username');
       $password = $request->input('password');


    }
}
