<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class BasicConroller extends Controller
{
    function index(){
        return view('admin.login');
    }

    function singin(Request $request){
        $name = $request->name;
        $password = $request->password;

        if(Auth::attempt(['email' => $name, 'password' => $password])){
            return redirect()->route('admin.panel.index');
        }else redirect()->back();
    }
}

