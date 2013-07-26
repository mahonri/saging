@extends('_layouts.default')

@section('content')

{{ Form::model($user, array('method' => 'put', 'route' => array('users.update', $user->id))) }}

<div class="control-group">
	{{ Form::label('first_name', 'Fullname')}}
	<div class="control">
		{{ Form::text('first_name', $user->first_name, array('readonly' => 'readonly')) }}
	</div>
</div>

<div class="control-group">
	{{ Form::label('email', 'Email')}}
	<div class="control">
		{{ Form::text('email', $user->email , array('readonly' => 'readonly')) }}
	</div>
</div>

@foreach($groups as $group)
{{ Form::checkbox('groups[]', $group->id, in_array($group->id, $groupids)) }} <label>{{ $group->name }}</label><br />
@endforeach

<div class="form-actions">
	{{ Form::submit('Update') }}
</div>

{{ Form::close() }}

@stop