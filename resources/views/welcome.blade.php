@extends('master')



@section('content')


<h3>Events</h3>
<div class="upcomingEventsContainer collection row">

  @foreach ($events as $event )
  <a href="/event/{{ $event->id }}">
    <article>
      <li>Name: {{$event->name}}</li>
      <li>Date: {{$event->startdate}}</li>
    </article>
    </a>
  @endforeach;
</div>


<h3>Artists</h3>
<div class="popularArtistsContainer collection row">

  @foreach ($artists as $artist )
    <article>
      <li>Name: {{$artist->name}}</li>
      <li>Country: {{$artist->country}}</li>
    </article>
  @endforeach;
</div>


  <h3>Venues</h3>
<div class="popularVenuesContainer collection row">

  @foreach ($venues as $venue )
    <article>
      <li>Name: {{$venue->name}}</li>
      <li>City: {{$venue->city}}</li>
    </article>
  @endforeach;
</div>

  @stop
