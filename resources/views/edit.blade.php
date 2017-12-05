@extends('master')

@section('content')
   <h1>Edit: {!! $venue->name !!}</h1>

   {!! Form::model($venue, ['method' => 'PATCH', 'action' => ['VenueController@update', $venue->id]]) !!}
     @include ('partials', ['submitButton' => 'Update venue']);


   {!! Form::close() !!}
   
@include('errors');

@stop