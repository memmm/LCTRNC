@extends('master')

@section('content')

            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif


                <div class="links">
                    <a href="/">Home</a>
                    <a href="/">Artists</a>
                    <a href="/">Events</a>
                    <a href="/">Venues</a>
                    <a href="/">Login</a>

                </div>

                <div class="title m-b-md">
                    Venue names
                </div>
                @foreach ($things as $thing)
                  <li>{{ $thing->name }}</li>
                @endforeach



@stop
