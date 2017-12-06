<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LCTRNC</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
      <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

    </head>
    <body>
      <a href="/" id="title" style="text-decoration: none">LCTRNC</a>

      <div class="main-cont">

          <div class="container" id="app">
              <nav class="links">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"><a href="artists">Artists</a></span>
                        <span class="icon-bar"><a href="events">Events</a></span>
                        <span class="icon-bar"><a href="venues">Venues</a></span>
                        <span class="icon-bar"></span>
                    </button>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                  <ul class="nav navbar-nav navbar-right">
                    <a href="{{ url('/artists') }}">Artists</a>
                    <a href="{{ url('/events') }}">Events</a>
                    <a href="{{ url('/venues') }}">Venues</a>
                    <a href="{{ url('/about') }}">About</a>


                <!-- Right Side Of Navbar -->


                  @if (Auth::guest())

                      @if (Route::has('login'))
                                  <a href="{{ url('/register') }}">Register</a>
                                  <a href="{{ url('/login') }}">Login</a>
                      @endif

                  @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/profile/{{ Auth::user()->id }}">Profile</a></li>
                            <li><a href="{{ url('/home') }}">Home</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                  @endif
                </ul>
        </div>
    </nav>
  </div>
        @yield('content')

      </div>

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}"></script>
      </body>
  </html>
