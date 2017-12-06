 <div class="form-group">
       {!! Form::label('name', 'Name:') !!}
       {!! Form::text('name', null, ['class' => 'form-control']) !!}



       {!! Form::label('email', 'Email:') !!}
       {!! Form::text('email', null, ['class' => 'form-control']) !!}



       <br>

       <!-- Add user -->
       {!! Form::submit($submitButton, ['class' => 'btn btn-primary form-control']) !!}
     </div>
