{{ Form::open(array('route' => 'roles.store')) }}


	<div class="control-group">
		{{ Form::label('name', 'Role') }}
		<div class="control">
			{{ Form::text('name') }}
		</div>
	</div>


	<div class="control-group">
		{{ Form::label('description', 'Description') }}
		<div class="control">
			{{ Form::textarea('description') }}
		</div>
	</div>


{{ Form::close() }}