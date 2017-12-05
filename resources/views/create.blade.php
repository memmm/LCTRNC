@extends('master')

@section('content')
 
   <h1>Add new venue</h1>

   <hr/>
   
   {!! Form::open(['url' => 'venues']) !!}
     <div class="form-group">
       {!! Form::label('name', 'Name:') !!}
       {!! Form::text('name', null, ['class' => 'form-control']) !!}
         
         
       {!! Form::label('address', 'Address:') !!}
       {!! Form::text('address', null, ['class' => 'form-control']) !!}
         
         
       {!! Form::label('city', 'City:') !!}
       {!! Form::text('city', null, ['class' => 'form-control']) !!}
         
         
       {!! Form::label('email', 'Email:') !!}
       {!! Form::text('email', null, ['class' => 'form-control']) !!}
       
         
       {!! Form::label('added_on', 'Add on:') !!}
       {!! Form::input('date', 'added_on', date('Y-m-d'), ['class' => 'form-control']) !!}
         
       <br>
         
       <!-- Add venue -->
       {!! Form::submit('Add venue', ['class' => 'btn btn-primary form-control']) !!}
     </div>


   {!! Form::close() !!}
   
@if ($errors->any())
   <ul class="alert alert-danger">
       @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
       @endforeach
   </ul>
@endif

@stop