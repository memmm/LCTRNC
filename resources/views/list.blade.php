@extends('master')

@section('content')


                <div class="title m-b-md">
                    {{$dbname}} names
                </div>

                <div class="well" style="background: black;">
                @foreach ($things as $thing)
                  <li>{{ $thing->name }}</li>
                @endforeach
                </div>

@if(Auth::user())
<a href="{{url()->current()}}/create"><button type="button" name="button" class="btn btn-primary">Add new</button></a>
@endif

@stop
