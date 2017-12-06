@extends('master')



@section('content')


<h3>Events</h3>
<div class="upcomingEventsContainer collection row">

  @foreach ($events as $event )
  <div class="col-sm-3">
   <a href="/events/event/{{ $event->id }}">
    <article>
      <li>Name: {{$event->name}}</li>
      <li>Date: {{$event->startdate}}</li>
    </article>
    </a>
    </div>
  @endforeach
</div>


<h3>Artists</h3>
<div class="popularArtistsContainer collection row">

  @foreach ($artists as $artist )
  <div class="col-sm-3">
   <a href="/artists/artist/{{ $artist->id }}">
    <article>
      <li>Name: {{$artist->name}}</li>
      <li>Country: {{$artist->country}}</li>
    </article>
  </a>
  </div>
  @endforeach
</div>


  <h3>Venues</h3>
<div class="popularVenuesContainer collection row">

  @foreach ($venues as $venue )
  <div class="col-sm-3">
   <a href="/venues/venue/{{ $venue->id }}">
    <article>
      <li>Name: {{$venue->name}}</li>
      <li>City: {{$venue->city}}</li>
    </article>
  </a>
  </div>
  @endforeach
</div>

  @stop
