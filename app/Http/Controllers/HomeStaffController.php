<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeStaffController extends Controller
{
    public function index()
    {  
        return view('staff.index');
    }
}
