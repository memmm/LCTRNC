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
                    <img src='/uploads/images/{{ $thing->image }}' onmouseover="this.src='/uploads/images/pix{{ $thing->image }}';" onmouseout="this.src='/uploads/images/{{ $thing->image }}';" />
                  <h4>{{ $thing->name }}</h4>

                  @if(Auth::user())
                  <a href="{{url()->current()}}/{{$thing->id}}/edit"><button type="button" name="button" class="btn btn-primary">Modify</button></a>
                  @endif
                    </a>
                </div>


                @endforeach

                </div>



@stop
