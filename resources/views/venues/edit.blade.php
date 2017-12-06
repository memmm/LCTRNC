@extends('master')

@section('content')
   <h1>Edit: {!! $venue->name !!}</h1>

   {!! Form::model($venue, ['method' => 'PATCH', 'action' => ['VenueController@update', $venue->id]]) !!}
     @include ('venues/partials', ['submitButton' => 'Update venue'])

{!! Form::close() !!}

{!! Form::open(['route' => ['venues.destroy', $venue->id], 'method' => 'Delete']) !!}

{!! Form::submit('Delete venue', ['class' => 'btn btn-primary btn-block']) !!}


   {!! Form::close() !!}


@include('errors')

@stop
