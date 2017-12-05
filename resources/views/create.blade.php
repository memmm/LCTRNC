@extends('master')

@section('content')
 
   <h1>Add new venue</h1>

   <hr/>
   
   {!! Form::open(['url' => 'venues']) !!}
    
       @include ('partials', ['submitButton' => 'Add venue']);

   {!! Form::close() !!}



   
@include('errors');

@stop