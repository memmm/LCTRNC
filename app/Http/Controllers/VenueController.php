<?php

namespace App\Http\Controllers;

use App\Venue;
use App\Http\Requests;
use App\Http\Requests\AddVenueRequest;
use Illuminate\HttpResponse;
use Illuminate\Http\Request;
use Session;
use Auth;
use Image;

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
        return view('list', ['things' => Venue::latest()->get(), 'dbname' => 'Venue']);
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
          return redirect('venues');
        }
        return view('venues/create');
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

        return view('venues.venue', compact('venue'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Venue  $venue
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
       $request->user()->authorizeRoles(['moderator', 'admin']);
        $venue = Venue::findOrFail($id);
        return view('venues/edit', compact('venue'));
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

         if($request->hasFile('image')){
           $image = $request->file('image');
           $watermark = Image::make(public_path('lctrnc-logo.png'));
           $filename = $venue->name . '.' . $image->getClientOriginalExtension();
           Image::make($image)->fit(300)->insert($watermark, 'bottom-right')->save( public_path('/uploads/images/' . $filename));

           $pixfilename = 'pix' . $venue->name . '.' . $image->getClientOriginalExtension();
           Image::make($image)->fit(300)->invert()->insert($watermark, 'bottom-right')->save( public_path('/uploads/images/' . $pixfilename));

           $venue->image = $filename;
           $venue->save();
         }
         return view('venues/venue', compact('venue'));
         // return redirect('venues');
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
       Session::flash('msg', 'The venue was successfully deleted.');
       return redirect()->route('venues.index');
    }
}
