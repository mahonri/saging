@extends('_layouts.default')

@section('content')

{{ Form::open(array('route' => 'lfcsystems.store')) }}

<div class="control-group">
	{{ Form::label('name', 'Name') }}
	<div class="control">
		{{ Form::text('name') }}
	</div>
</div>

<div class="control-group">
	{{ Form::label('user', 'Administrator') }}
	<div class="control">
		{{ Form::select('user', $admins) }}
	</div>
</div>

<div class="control-group">
	{{ Form::label('description', 'Description') }}
	<div class="control">
		{{ Form::textarea('description') }}
	</div>
</div>


<div class="form-actions">
	{{ Form::submit('Save', array('class' => 'btn btn-success btn-save btn-large')) }}
	<a href="{{ URL::route('lfcsystems.index') }}" class="btn btn-large">Cancel</a>
</div>

{{ Form::close() }}

@stop