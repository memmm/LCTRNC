@extends('master')

@section('content')

   <h1>Add new artist</h1>

   <hr/>

   {!! Form::open(['url' => 'artists']) !!}

       @include ('artists/partials', ['submitButton' => 'Add artist']);

   {!! Form::close() !!}




@include('errors');

@stop
