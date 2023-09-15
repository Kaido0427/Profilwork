<?php

namespace App\Http\Controllers;

use App\Models\job;
use App\Models\proposition;
use Illuminate\Support\Facades\Auth;

class CDash extends Controller
{
    public function index()
    {
        $jobs = Auth::user()->jobs;
        $job=job::all();
        $prop=proposition::all();
        return view('dashboard', compact('jobs','job','prop'));
    }
}
