<?php

namespace App\Http\Controllers;

use App\Venue;
use App\Http\Requests;
use App\Http\Requests\AddVenueRequest;
use Illuminate\HttpResponse;
use Illuminate\Http\Request;
use Session;

class VenueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  $dbname = 'Venue';
        return view('list', ['things' => Venue::get(), 'dbname' => 'Venue']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddVenueRequest $request)
    {
        
        Venue::create($request->all());
        
        return redirect('venues');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Venue  $venue
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $venue = Venue::findOrFail($id);

        return view('venue', compact('venue'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Venue  $venue
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $venue = Venue::findOrFail($id);
        return view('edit', compact('venue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Venue  $venue
     * @return \Illuminate\Http\Response
     */
    public function update($id, AddVenueRequest $request)
    {
         $venue = Venue::findOrFail($id);
         $venue->update($request->all());
         return redirect('venues');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Venue  $venue
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $venue = Venue::find($id);
       $venue->delete();
       Session::flash('msg', 'The venue was successfully delete.');
       return redirect()->route('venues.index');
    }
}
