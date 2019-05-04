<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class JobController extends Controller
{
    public function index(){

        $jobs = Job::all()-> take(8);
        return view('welcome', compact('jobs'));

    }

}
