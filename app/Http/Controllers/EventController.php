<?php

namespace App\Http\Controllers;

use App\Event;
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

        return view('events.event', compact('event'));
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

    public function update_image($id, Request $request )
    {

      if($request->hasFile('img')){
        $img = $request->file('img');

        $filename = time() . '.' . $img->getClientOriginalExtension();
        Image::make($img)->fit(300)->save( public_path('/uploads/images/' . $filename));

        $pixfilename = 'pix' . time() . '.' . $img->getClientOriginalExtension();
        Image::make($img)->fit(300)->colorize(50,-50,50)->save( public_path('/uploads/images/' . $pixfilename));

        $event = Event::findOrFail($id);
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
