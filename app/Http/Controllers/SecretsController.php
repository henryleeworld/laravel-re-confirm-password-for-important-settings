<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecretsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('secrets');
    }
}
