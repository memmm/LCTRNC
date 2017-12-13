@extends('master')

@section('content')
<div class="container">
    <div class="row">
        <h1>Event name {{$event->name}}</h1>

        <img src='/uploads/images/{{ $event->image }}' onmouseover="this.src='/uploads/images/pix{{ $event->image }}';" onmouseout="this.src='/uploads/images/{{ $event->image }}';" />

    </div>
    <div class="row">
       <p>Description: {{$event->description}}</p>
    </div>
    @if(Auth::user())
    <a href="{{$event->id}}/edit"><button type="button" name="button" class="btn btn-primary">Modify</button></a>
    @endif
</div>
@endsection
