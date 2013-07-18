{{ Form::open(array('route' => 'accounts.store')) }}

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