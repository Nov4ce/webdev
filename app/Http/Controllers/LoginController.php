<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function index() {
        return view('OCT19/Login');
   }

   public function loginSubmit(Request $request) {
    //    return view("/Common/Home");
    dd($request->email);

   }
}
