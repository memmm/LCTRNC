@extends('master')

@section('content')
   <h1>Edit: {!! $event->name !!}</h1>

   {!! Form::model($event, ['method' => 'PATCH', 'action' => ['EventController@update', $event->id]]) !!}
     @include ('events/partials', ['submitButton' => 'Update event'])
{!! Form::close() !!}

{!! Form::open(['route' => ['events.destroy', $event->id], 'method' => 'Delete']) !!}

{!! Form::submit('Delete event', ['class' => 'btn btn-primary btn-block']) !!}


   {!! Form::close() !!}


@include('errors')

@stop
