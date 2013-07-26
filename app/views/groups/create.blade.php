@extends('_layouts.default')

@section('content')

{{ Form::open(array('route' => 'groups.store')) }}

<div class="control-group">
	{{ Form::label('name', 'Name') }}
	<div class="control">
		{{ Form::text('name') }}
	</div>
</div>

@foreach($permissions as $permission)
{{ Form::checkbox('permissions[]', $permission->computerreadablename) }} <label>{{ $permission->humanreadablename }}</label><br />
@endforeach

<div class="form-actions">
	{{ Form::submit('Save', array('class' => 'btn btn-success btn-save btn-large')) }}
</div>

{{ Form::close() }}

@stop