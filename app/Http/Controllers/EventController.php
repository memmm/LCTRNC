<?php

namespace App\Http\Controllers;

use App\Event;
use App\Venue;
use App\Http\Requests;
use App\Http\Requests\CreateEventRequest;
use Illuminate\Http\Request;
use Illuminate\HttpResponse;
use Session;
use Auth;
use Image;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return view('list', ['things' => Event::latest()->get(), 'dbname' => 'Event']);
        // return Event::all();
    }

    public function list()
    {
      return Event::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if (Auth::guest())
      {
        return redirect('events');
      }
      $venues = Venue::pluck('name');
      return view('events/create', compact('venues'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEventRequest $request)
    {
      Event::create($request->all());

      return redirect('events');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);

        return view('events.event', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
      $request->user()->authorizeRoles(['moderator', 'admin']);
      $event = Event::findOrFail($id);
      $venues = Venue::pluck('name');
      return view('events/edit', compact('event', 'venues'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update($id, CreateEventRequest $request)
    {
      $event = Event::findOrFail($id);
      $event->update($request->all());

      if($request->hasFile('image')){
        $image = $request->file('image');

        $filename = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->fit(300)->save( public_path('/uploads/images/' . $filename));

        $pixfilename = 'pix' . time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->fit(300)->colorize(50,-50,50)->save( public_path('/uploads/images/' . $pixfilename));

        $event->image = $filename;
        $event->save();
      }
      return view('events/event', compact('event'));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $event = Event::find($id);
      $event->delete();
      Session::flash('msg', 'The event was successfully deleted.');
      return redirect()->route('events.index');
    }
}
