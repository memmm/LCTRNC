<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LCTRNC</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
      <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

    </head>
    <body>
      <a href="/" id="title" style="text-decoration: none">LCTRNC</a>
      <div class="main-cont">
         
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/about') }}">About</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="links">
              <a href="artists">Artists</a>
              <a href="events">Events</a>
              <a href="venues">Venues</a>
              <a href="/">Login</a>
            </div>
          
        @yield('content')

      </div>
         
      </body>
  </html>
