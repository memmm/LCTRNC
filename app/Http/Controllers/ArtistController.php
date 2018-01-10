<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Http\Requests;
use App\Http\Requests\CreateArtistRequest;
use Illuminate\Http\Request;
use Illuminate\HttpResponse;
use Session;
use Auth;
use Image;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         return view('list', ['things' => Artist::latest()->get(), 'dbname' => 'Artist']);
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
        return redirect('artists');
      }
      return view('artists/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateArtistRequest $request)
    {
      Artist::create($request->all());

      return redirect('artists');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $artist = Artist::findOrFail($id);

      return view('artists.artist', compact('artist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
      $request->user()->authorizeRoles(['moderator', 'admin']);
      $artist = Artist::findOrFail($id);
      return view('artists/edit', compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $artist = Artist::findOrFail($id);
      $artist->update($request->all());

      if($request->hasFile('image')){
        $image = $request->file('image');
        $watermark = Image::make(public_path('lctrnc-logo.png'));
        $filename = $artist->name . '.' . $image->getClientOriginalExtension();
        Image::make($image)->fit(300)->insert($watermark, 'bottom-right')->save( public_path('/uploads/images/' . $filename));

        $pixfilename = 'pix' . $artist->name . '.' . $image->getClientOriginalExtension();
        Image::make($image)->fit(300)->pixelate(12)->insert($watermark, 'bottom-right')->save( public_path('/uploads/images/' . $pixfilename));


        $artist->image = $filename;
        $artist->save();
      }

      return view('artists/artist', compact('artist'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $artist = Artist::find($id);
      $artist->delete();
      Session::flash('msg', 'The artist was successfully deleted.');
      return redirect()->route('artist.index');
    }
}
