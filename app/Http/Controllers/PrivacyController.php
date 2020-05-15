<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyController extends Controller
{

    //middleware checks if the user is auth to access the controller
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('privacy.policy');
    }

    public function userGuide(){
        if (auth()->user()->hasRole('admin')){
            return view('guide.adminGuide');
        } else if (auth()->user()->hasRole('supervisor')){
            return view('guide.supervisorGuide');
        } else {
            return view('guide.studentGuide');
        }

    }
}
