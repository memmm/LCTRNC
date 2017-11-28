@extends('master')

@section('content')
        <div class="flex-center position-ref full-height">
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
                @foreach ($venues as $venue)
                  <li>{{ $venue->name }}</li>
                @endforeach

            </div>

@stop
