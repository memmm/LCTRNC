@extends('master')

@section('content')
<div class="container">
    <div class="row">
        <h1>Artist name {{$artist->name}}</h1>
    </div>
    <div class="row">
       <p>Content: {{$artist->description}}</p>
    </div>
    @if(Auth::user())
    <a href="../{{$artist->id}}/edit"><button type="button" name="button" class="btn btn-primary">Modify</button></a>
    @endif
</div>
@endsection
