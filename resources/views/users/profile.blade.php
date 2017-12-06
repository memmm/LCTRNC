@extends('master')

@section('content')

<h2>This is the user's private profile</h2>

<!-- @can('update', $user) -->
<div class="container">
    <div class="row">
        <h1>User: {{$user->name}}</h1>
    </div>
    <div class="row">
       <p>Email: {{$user->email}}</p>
    </div>
</div>
<!-- @endcan -->

@stop
