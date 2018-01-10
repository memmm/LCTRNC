@extends('master')

@section('content')

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css"/>
<div class="container">


                <h4>Home</h4>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div><a href="importExport"><button type="button" name="button" class="btn btn-primary">See all users</button></a></div>

                <h3>Calendar</h3>

                <div id='calendar'></div>

                <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>

                <script>
                    $(document).ready(function() {
                        // page is now ready, initialize the calendar...
                        $('#calendar').fullCalendar({
                            // put your options and callbacks here
                            events : [
                                @foreach($events as $event)
                                {
                                    title : '{{ $event->name }}',
                                    start : '{{ $event->startdate }}',
                                    url : '{{ route('events.edit', $event->id) }}'
                                },
                                @endforeach
                            ]
                        })
                    });
                </script>




</div>
@endsection
