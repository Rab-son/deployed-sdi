<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CMSController extends Controller
{
    //
    public function dashboard(){
        return view('backend.dashboard')->with('success', 'You Are Logged In');
    }
}
