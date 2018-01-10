@extends('Master')

@section('content')

	<div class="container">


		    <h3 class="panel-title" style="padding:12px 0px;font-size:25px;"><strong>Export users to excel file</strong></h3>

		  <div class="panel-body">

		  		@if ($message = Session::get('success'))
					<div class="alert alert-success" role="alert">
						{{ Session::get('success') }}
					</div>
				@endif

				@if ($message = Session::get('error'))
					<div class="alert alert-danger" role="alert">
						{{ Session::get('error') }}
					</div>
				@endif

		    	<h3>Export all users</h3>
		    	<div style="margin-top: 15px;padding: 20px;">
			    	<a href="{{ url('downloadUsersExcel/xls') }}"><button class="btn btn-success btn-lg">Download Excel (xls)</button></a>
					<a href="{{ url('downloadUsersExcel/xlsx') }}"><button class="btn btn-success btn-lg">Download Excel (xlsx)</button></a>
					<a href="{{ url('userslist') }}"><button class="btn btn-success btn-lg">JSON object</button></a>

					<h3>Export all events</h3>
		    	<div style="margin-top: 15px;padding: 20px;">
			    	<a href="{{ url('downloadEventsExcel/xls') }}"><button class="btn btn-success btn-lg">Download Excel (xls)</button></a>
					<a href="{{ url('downloadEventsExcel/xlsx') }}"><button class="btn btn-success btn-lg">Download Excel (xlsx)</button></a>
					<a href="{{ url('eventslist') }}"><button class="btn btn-success btn-lg">JSON object</button></a>

		    	</div>


		  </div>

	</div>


@stop
