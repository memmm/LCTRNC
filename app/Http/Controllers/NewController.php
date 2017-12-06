<?php

namespace App\Http\Controllers;


use App\Venue;
use App\Event;
use App\Artist;
use App\Http\Controllers\Controller;


class NewController extends Controller
{

    public function index()
    {
        $venues = Venue::latest()->get();
        $events = Event::latest()->get();
        $artists = Artist::latest()->get();
        return view('welcome', compact('venues', 'events', 'artists'));
    }

    public function show($id)
    {
        $venue = Venue::find($id);

        return $venue;
    }
}
