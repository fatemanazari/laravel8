<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class ModelController extends Controller
{
    //
    function getData(){
        return Student::all();
    }

}
