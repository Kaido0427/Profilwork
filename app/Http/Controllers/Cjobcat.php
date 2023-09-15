<?php

namespace App\Http\Controllers;

use App\Models\jobcat;
use Illuminate\Http\Request;

class Cjobcat extends Controller
{
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(jobcat $jobcat)
    {
        return view('jobcat.jobs.create', compact('jobcat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, jobcat $jobcat)
    {
        $imageName = $request->image->store('jobs');

        $jobcat->jobs()->create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imageName
        ]);

        return redirect()->route('dashboard');
    }
}
