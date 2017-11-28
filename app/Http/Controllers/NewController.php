<?php

namespace App\Http\Controllers;


use App\Venue;
use App\Http\Controllers\Controller;


class NewController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @return Response
     */
    public function __invoke()
    {

    // $venues = Venue::all();
    //
    // foreach ($venues as $venue) {
    //     echo $venue->name;
    // }
        return view('about', ['venues' => Venue::get()]);
    }
}
