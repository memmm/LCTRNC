@extends('master')

@section('content')
<div class="container">
    <div class="row">
        <h1>Venue name: {{$venue->name}}</h1>
    </div>
    <div class="row">
       <p>Address: {{$venue->address}}</p>
    </div>
    @if(Auth::user())
    <a href="{{$venue->id}}/edit"><button type="button" name="button" class="btn btn-primary">Modify</button></a>
    @endif
</div>
@endsection
