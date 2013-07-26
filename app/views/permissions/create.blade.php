@extends('_layouts.default')

@section('content')

{{ Form::open(array('route' => 'permissions.store')) }}

	<div class="control-group">
		{{ Form::label('humanreadablename', 'Human-readable name')}}
		<div class="control">
			{{ Form::text('humanreadablename') }}
		</div>
	</div>

	<div class="control-group">
		{{ Form::label('computerreadablename', 'Computer-readable name')}}
		<div class="control">
			{{ Form::text('computerreadablename')}}
		</div>
	</div>

	<div class="form-actions">
		{{ Form::submit('Save') }}
	</div>

{{ Form::close() }}

@stop