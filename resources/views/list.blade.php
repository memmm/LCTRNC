@extends('master')

@section('content')


                <div class="title">
                    {{$dbname}}s
                </div>

                @if(Auth::user())
                <a id="addItemBtn" href="{{url()->current()}}/create"><button type="button" name="button" class="btn btn-primary">Add new</button></a>
                @endif

                <div class="tiles">
                @foreach ($things as $thing)

                <div class="box">
                  <a href="{{Request::url()}}/{{$thing->id}}">
                  <li>{{ $thing->name }}</li>

                  @if(Auth::user())
                  <a href="{{url()->current()}}/{{$thing->id}}/edit"><button type="button" name="button" class="btn btn-primary">Modify</button></a>
                  @endif
                    </a>
                </div>


                @endforeach

                </div>



@stop
