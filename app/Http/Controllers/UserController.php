<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\HttpResponse;
use App\Http\Requests\CreateUserRequest;
use Session;
use Auth;
use Image;

class UserController extends Controller
{

  public function __construct() {
    $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      return User::latest()->get();
    }

    public function list()
    {
      return User::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Venue::create($request->all());

      return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $user = User::findOrFail($id);
    //  return $user;
      return view('users/profile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $user = User::findOrFail($id);
      return view('users/edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update($id, CreateUserRequest $request )
    {
      $user = User::findOrFail($id);
      $user->update($request->all());
      return redirect('home');
    }

    public function update_avatar(Request $request )
    {

      if($request->hasFile('avatar')){
        $avatar = $request->file('avatar');

        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        Image::make($avatar)->fit(300)->save( public_path('/uploads/avatars/' . $filename));

        $user = Auth::user();
        $user->avatar = $filename;
        $user->save();
      }

      return view('users/profile', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user = User::find($id);
      $user->delete();
      Session::flash('msg', 'The user was successfully deleted.');
      return redirect()->route('users.index');
    }
}
