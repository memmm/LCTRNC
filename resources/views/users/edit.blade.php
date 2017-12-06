@extends('master')

@section('content')
   <h1>Edit: {!! $user->name !!}</h1>

{!! Form::model($user, ['method' => 'PATCH', 'action' => ['UserController@update', $user->id]]) !!}
     @include ('users/partials', ['submitButton' => 'Update profile'])


{!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'Delete']) !!}

{!! Form::submit('Delete profile', ['class' => 'btn btn-primary btn-block']) !!}


   {!! Form::close() !!}


@include('errors')

@stop
