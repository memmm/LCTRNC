@extends('master')



@section('content')


<h3>Highlighted events</h3>
<div class="upcomingEventsContainer tiles">

  @foreach ($events as $event )


    <article class="box">
      <a href="/events/{{ $event->id }}">
      <li>Name: {{$event->name}}</li>
      <li>Date: {{$event->startdate}}</li>
      </a>
    </article>


  @endforeach
</div>


<h3>Highlighted artists</h3>
<div class="popularArtistsContainer tiles">

  @foreach ($artists as $artist )


    <article class="box">
      <a href="/artists/{{ $artist->id }}">
      <li>Name: {{$artist->name}}</li>
      <li>Country: {{$artist->country}}</li>
        </a>
    </article>


  @endforeach
</div>


  <h3>Highlighted venues</h3>
<div class="popularVenuesContainer tiles">

  @foreach ($venues as $venue )


    <article class="box">
       <a href="/venues/{{ $venue->id }}">
      <li>Name: {{$venue->name}}</li>
      <li>City: {{$venue->city}}</li>
      </a>
    </article>


  @endforeach
</div>

  @stop
