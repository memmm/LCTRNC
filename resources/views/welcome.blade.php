@extends('master')



@section('content')



<div class="upcomingEventsContainer collection">

</div>

<div class="popularArtistsContainer collection">

</div>

<div class="popularVenuesContainer collection">
  <h1>Venues</h1>
  @foreach ($venues as $venue )
    <article>
      <h2>{{$venue->name}}</h2>

    </article>
  @endforeach;
</div>

  @stop
