@extends('master')

@section('content')

<div class="container">
    <div class="row">
      <div class="col-md-4">


        <h1>Artist: {{$artist->name}}</h1>

        <img src='/uploads/images/{{ $artist->image }}' onmouseover="this.src='/uploads/images/pix{{ $artist->image }}';" onmouseout="this.src='/uploads/images/{{ $artist->image }}';" />
        </div>

      <div class="col-md-6">
         <p>{{$artist->description}}</p>
      </div>
      @if(Auth::user())
      <a href="{{$artist->id}}/edit"><button type="button" name="button" class="btn btn-primary">Modify</button></a>
      @endif
  </div>
</div>
@endsection
