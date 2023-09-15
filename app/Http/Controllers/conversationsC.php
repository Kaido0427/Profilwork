<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class conversationsC extends Controller
{
    public function index()
    {
        return view('conversations.index');
    }
}
