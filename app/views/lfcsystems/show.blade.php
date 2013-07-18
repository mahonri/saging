@extends('_layouts.default')

@section('content')

<a href="{{ URL::route('lfcsystems.edit', $lfcsystem->id) }}">{{ $lfcsystem->id }}</a><br />
{{ $lfcsystem->name }}<br />
{{ $lfcsystem->admin }}<br />
{{ $lfcsystem->description }}<br />

{{ Form::open(array('route' => 'accounts.store')) }}
		{{ Form::hidden('lfcsystem_id', $lfcsystem->id)}}
	<div class="control-group">
		{{ Form::label('emplid', 'Emplid') }}
		<div class="control">
			{{ Form::text('emplid') }}
		</div>
	</div>

	<div class="control-group">
		{{ Form::label('username', 'Username') }}
		<div class="control">
			{{ Form::text('username') }}
		</div>
	</div>

	<div class="control-group">
		{{ Form::label('email', 'Email') }}
		<div class="control">
			{{ Form::text('email') }}
		</div>
	</div>

	 <div class="form-actions">
        {{ Form::submit('Save', array('class' => 'btn btn-success btn-save btn-large')) }}
        <a href="{{ URL::route('accounts.index') }}" class="btn btn-large">Cancel</a>
    </div>

{{ Form::close() }}

	<table>
		<tr>
			<th>Emplid</th>
			<th>Username</th>
			<th>Email</th>
		</tr>

		@foreach ($accounts as $account)
		<tr>
			<td><a href="{{ Url::route('accounts.show', $account->id) }}">{{ $account->emplid }}</a></td>
			<td>{{ $account->username }}</td>
			<td>{{ $account->email }}</td>
		</tr>
		@endforeach

	</table>

<?php echo $accounts->links(); ?>

        {{ Form::open(array('route' => array('lfcsystems.destroy', $lfcsystem->id), 'method' => 'delete')) }}
		    <button type="submit" class="btn btn-danger btn-mini">Delete</butfon>
		{{ Form::close() }}

@stop