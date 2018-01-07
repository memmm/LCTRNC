@extends('master')



@section('content')


<h3>Highlighted events</h3>
<div class="upcomingEventsContainer tiles">

  @foreach ($events as $event )


    <article class="box" >

      <a href="/events/{{ $event->id }}">
      <img src='/uploads/images/{{ $event->image }}' onmouseover="this.src='/uploads/images/pix{{ $event->image }}';" onmouseout="this.src='/uploads/images/{{ $event->image }}';" />
      </a>
      <div class="box-text">
        <h4>Name: {{$event->name}}</h4>
        <p>Date: {{$event->startdate}}</p>
      </div>
    </article>


  @endforeach
</div>


<h3>Highlighted artists</h3>
<div class="popularArtistsContainer tiles">

  @foreach ($artists as $artist )


    <article class="box">
      <a href="/artists/{{ $artist->id }}">
          <img src='/uploads/images/{{ $artist->image }}' onmouseover="this.src='/uploads/images/pix{{ $artist->image }}';" onmouseout="this.src='/uploads/images/{{ $artist->image }}';" />

        </a>
        <div class="box-text">
          <h4>Name: {{$artist->name}}</h4>
          <p>Country: {{$artist->country}}</p>
        </div>
    </article>


  @endforeach
</div>


  <h3>Highlighted venues</h3>
<div class="popularVenuesContainer tiles">

  @foreach ($venues as $venue )


    <article class="box">

       <a href="/venues/{{ $venue->id }}">
           <img src='/uploads/images/{{ $venue->image }}' onmouseover="this.src='/uploads/images/pix{{ $venue->image }}';" onmouseout="this.src='/uploads/images/{{ $venue->image }}';" />


      </a>
      <div class="box-text">
        <h4>Name: {{$venue->name}}</h4>
        <p>City: {{$venue->city}}</p>
      </div>
    </article>


  @endforeach
</div>

  @stop
