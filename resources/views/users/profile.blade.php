@extends('master')

@section('content')

<h2>This is the user's private profile</h2>

<!-- @can('update', $user) -->
<div class="container">
    <div class="row">
        <h1>User: {{$user->name}}</h1>
      <img src="/uploads/avatars/{{ $user->avatar }}" alt="Profile pic" style="width:150px; border-radius: 50%;">
      <form enctype="multipart/form-data" action="/profile" method="post">
        <label>Update Profile Picture</label>
        <input type="file" name="avatar">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" class="pull-right btn btn-sm btn-primary">

      </form>

    </div>
    <div class="row">
       <p>Email: {{$user->email}}</p>
    </div>
</div>
<!-- @endcan -->

@stop
