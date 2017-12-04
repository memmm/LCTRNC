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
        
       <br>
         
       <!-- Add venue -->
       {!! Form::submit('Add venue', ['class' => 'btn btn-primary form-control']) !!}
     </div>


   {!! Form::close() !!}
   

@stop