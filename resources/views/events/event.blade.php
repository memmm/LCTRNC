@extends('master')

@section('content')
<div class="container">
    <div class="row">
        <h1>Event name {{$event->name}}</h1>
    </div>
    <div class="row">
       <p>Content: {{$event->description}}</p>
    </div>
    @if(Auth::user())
    <a href="{{url()->current()}}/edit"><button type="button" name="button" class="btn btn-primary">Modify</button></a>
    @endif
</div>
@endsection
