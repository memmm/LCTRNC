@extends('master')

@section('content')

   <h1>Add new event</h1>

   <hr/>

   {!! Form::open(['url' => 'events']) !!}

       @include ('events/partials', ['submitButton' => 'Add event'])

   {!! Form::close() !!}




@include('errors')

@stop
