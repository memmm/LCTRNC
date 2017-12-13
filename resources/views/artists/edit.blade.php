@extends('master')

@section('content')
   <h1>Edit: {!! $artist->name !!}</h1>

   {!! Form::model($artist, ['method' => 'PATCH', 'files' => true, 'action' => ['ArtistController@update', $artist->id]]) !!}
     @include ('artists/partials', ['submitButton' => 'Update artist'])
{!! Form::close() !!}

{!! Form::open(['route' => ['artists.destroy', $artist->id], 'method' => 'Delete']) !!}

{!! Form::submit('Delete artist', ['class' => 'btn btn-primary btn-block']) !!}


   {!! Form::close() !!}


@include('errors')

@stop
