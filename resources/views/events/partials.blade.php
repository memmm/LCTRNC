 <div class="form-group">
       {!! Form::label('name', 'Name:') !!}
       {!! Form::text('name', null, ['class' => 'form-control']) !!}


       {!! Form::label('description', 'Description:') !!}
       {!! Form::text('description', null, ['class' => 'form-control']) !!}


       {!! Form::label('startdate', 'Starts:') !!}
       {!! Form::date('startdate', date('Y-m-d'), ['class' => 'form-control']) !!}

       {!! Form::label('enddate', 'Ends:') !!}
       {!! Form::date('enddate', date('Y-m-d'), ['class' => 'form-control']) !!}

       {!! Form::label('name', 'Image:') !!}
       {!! Form::file('image', ['class' => 'form-control']) !!}

       {!! Form::label('name', 'Venue:') !!}
       {!! Form::select('venue_name', $venues, null, ['class' => 'form-control']) !!}

       <br>

       <!-- Add event -->
       {!! Form::submit($submitButton, ['class' => 'btn btn-primary form-control']) !!}
     </div>
