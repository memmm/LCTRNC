@extends('master')

@section('content')






                <div class="title m-b-md">
                    {{$dbname}} names
                </div>
                @foreach ($things as $thing)
                  <li>{{ $thing->name }}</li>
                @endforeach



@stop
