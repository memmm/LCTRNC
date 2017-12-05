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
       {!! Form::submit($submitButton, ['class' => 'btn btn-primary form-control']) !!}
     </div>
