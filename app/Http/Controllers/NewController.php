<?php

namespace App\Http\Controllers;


use App\Venue;
use App\Http\Controllers\Controller;


class NewController extends Controller
{

    public function index()
    {
        $venues = Venue::all();
        return view('welcome', compact('venues'));
    }

    public function show($id)
    {
        $venue = Venue::find($id);

        return $venue;
    }
}
