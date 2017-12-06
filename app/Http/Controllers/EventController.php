<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests;
use App\Http\Requests\CreateEventRequest;
use Illuminate\Http\Request;
use Illuminate\HttpResponse;
use Session;
use Auth;

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
      return view('events/create');
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

        return view('event', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $event = Event::findOrFail($id);
      return view('events/edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(CreateEventRequest $request, $id)
    {
      $event = Event::findOrFail($id);
      $event->update($request->all());
      return redirect('events');
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
