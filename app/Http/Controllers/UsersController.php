<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    function getData(Request $req){
        $req->validate([
            'fname'=>'required | max:10' ,
            'lname'=>'required ' ,
            'email'=>'required',
            'uname'=>'required',
            'pass'=>'required | min:5',
            'city'=>'required',
        ]);
        return $req->input();
    }
}
