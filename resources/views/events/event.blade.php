@extends('master')

@section('content')
<div class="container">
    <div class="row">
        <h1>Event name {{$event->name}}</h1>

        <img src='/uploads/images/{{ $event->image }}' onmouseover="this.src='/uploads/images/pix{{ $event->image }}';" onmouseout="this.src='/uploads/images/{{ $event->image }}';" />

    </div>
    <div class="row">
       <p>Description: {{$event->description}}</p>
       <p>Venue: {{$event->venue_name}}</p>
    </div>
    @if(Auth::user())
    <a href="{{$event->id}}/edit"><button type="button" name="button" class="btn btn-primary">Modify</button></a>
    @if(! $event->users->contains(Auth::user()->id))
    <a href="{{ $event->users()->attach(Auth::user()->id) }}"><button class="btn btn-success btn-lg">Like</button></a>
    @endif

    <h4>Attending</h4>
    <ul>
      @foreach ($event->users as $user)
      <li>{{ $user->name }}</li>
      @endforeach
    </ul>

    @endif
</div>
@endsection
