<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function postLogin(Request $request){
        $role = 1;
       if(Auth::attempt(['email'=>$request->email,'password'=>$request->password,Auth::role(1)])){
            return redirect()->route('admin.dashboard');
       }
       return redirect()->back()->with('err','sai tai khoan');
    }
}
