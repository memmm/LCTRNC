@extends('master')

@section('content')
<div class="container">
    <div class="row">
        <h1>Event name {{$event->name}}</h1>
    </div>
    <div class="row">
       <p>Content: {{$event->description}}</p>
    </div>
</div>
@endsection
