@extends('master')

@section('content')


                <div class="title m-b-md">
                    {{$dbname}}s
                </div>

                <div class="tiles">
                @foreach ($things as $thing)
                <a href="{{Request::url()}}/{{lcfirst($dbname)}}/{{$thing->id}}">
                <div class="box">
                  <li>{{ $thing->name }}</li>
                </div></a>

                @endforeach
                </div>

@if(Auth::user())
<a href="{{url()->current()}}/create"><button type="button" name="button" class="btn btn-primary">Add new</button></a>
@endif

@stop
