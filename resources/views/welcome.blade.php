@extends('master')



@section('content')


<h3>Highlighted events</h3>
<div class="upcomingEventsContainer tiles">

  @foreach ($events as $event )


    <article class="box" style="background-image: url(/uploads/images/{{ $event->image }})">
      <a href="/events/{{ $event->id }}">

      <h4>Name: {{$event->name}}</h4>
      <p>Date: {{$event->startdate}}</p>
      </a>
    </article>


  @endforeach
</div>


<h3>Highlighted artists</h3>
<div class="popularArtistsContainer tiles">

  @foreach ($artists as $artist )


    <article class="box" style="background-image: url(/uploads/images/{{ $artist->image }})">
      <a href="/artists/{{ $artist->id }}">
      <h4>Name: {{$artist->name}}</h4>
      <p>Country: {{$artist->country}}</p>
        </a>
    </article>


  @endforeach
</div>


  <h3>Highlighted venues</h3>
<div class="popularVenuesContainer tiles">

  @foreach ($venues as $venue )


    <article class="box" style="background-image: url(/uploads/images/{{ $venue->image }})">

       <a href="/venues/{{ $venue->id }}">
      <h4>Name: {{$venue->name}}</h4>
      <p>City: {{$venue->city}}</p>

      </a>
    </article>


  @endforeach
</div>

  @stop
