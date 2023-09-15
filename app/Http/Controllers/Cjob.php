<?php

namespace App\Http\Controllers;

use App\Models\job;
use App\Models\jobcat;
use App\Models\proposition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\all;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

use App\Http\Requests\StorejobRequest;
use App\Http\Requests\UpdatejobRequest;
use Symfony\Component\HttpFoundation\Response;

class Cjob extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = job::with('jobcat', 'user')->latest()->get();
        $jobcats = jobcat::all();

        return view('jobs.index', compact('jobs','jobcats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobcats = jobcat::all();

        return view('jobs.create', compact('jobcats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorejobRequest $request)
    {
     

        job::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'image' => $request->image,
        ]);

        return redirect()->route('home')->with('success', 'Votre job a été créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
        public function show(job $jb)
        {
           
            return view('jobs.show', compact('jb',));
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(job $job,$id)
    {
       $job=job::find($id);
        $jobcats = jobcat::all();

        return view('jobs.edit', compact('job', 'jobcats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,job $id)
    {

        job::find($id);
        $titre = $request->input('titre');
        $description = $request->input('description');
        $image = $request->input('image');
       

        DB::table('jobs')
            ->where('id', '=', $id->id)
            ->update([
                'titre' => $titre,
                'description' => $description,
                'image' => $image
            ]);

            return redirect()->route('home')->with('success', 'Votre job a été modifié avec succes');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::findOrFail($id);
    
        $job->propositions()->delete();
        $job->delete();
    
        return redirect()->route('home')->with('success', 'Votre job a été supprimé');
    }
    
}

