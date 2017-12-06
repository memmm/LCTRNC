 <div class="form-group">
       {!! Form::label('name', 'Name:') !!}
       {!! Form::text('name', null, ['class' => 'form-control']) !!}


       {!! Form::label('description', 'Description:') !!}
       {!! Form::text('description', null, ['class' => 'form-control']) !!}



       <br>

       <!-- Add venue -->
       {!! Form::submit($submitButton, ['class' => 'btn btn-primary form-control']) !!}
     </div>
