@extends('master')

@section('content')
<div class="container">
    <div class="row">
        <h1>Venue name: {{$venue->name}}</h1>
    </div>
    <div class="row">
       <p>Address: {{$venue->address}}</p>
    </div>
</div>
@endsection
