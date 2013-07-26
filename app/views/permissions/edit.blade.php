@extends('_layouts.default')

@section('content')

{{ Form::model($permission, array('method' => 'put', 'route' => array('permissions.update', $permission->id) )) }}

	<div class="control-group">
		{{ Form::label('humanreadablename', 'Human-readable name') }}
		<div class="control">
			{{ Form::text('humanreadablename')}}
		</div>
	</div>

	<div class="control-group">
		{{ Form::label('computerreadablename', 'Computer-readable name') }}
		<div class="control">
			{{ Form::text('computerreadablename')}}
		</div>
	</div>

	<div class="form-actions">
		{{ Form::submit('Update') }}
	</div>

{{ Form::close() }}

@stop