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

	{{ Form::hidden('system_id',$id) }}

	 <div class="form-actions">
        {{ Form::submit('Save', array('class' => 'btn btn-success btn-save btn-large')) }}
        <a href="{{ URL::route('lfcsystems.show', $id) }}" class="btn btn-large">Cancel</a>
    </div>

{{ Form::close() }}
