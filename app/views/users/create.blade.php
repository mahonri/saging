@extends('_layouts.default')

@section('content')

<label>Search:</label>
<input type="text" id="searchemployee" />

{{ Form::open(array('route' => 'users.store')) }}

{{ Form::hidden('employee_id', '', array('id' => 'employee_id'))}}

<div class="control-group">
	{{ Form::label('email', 'Email') }}
	<div class="control">
		{{ Form::text('email') }}
	</div>
</div>

<div class="control-group">
	{{ Form::label('password', 'Password') }}
	<div class="control">
		{{ Form::password('password') }}
	</div>
</div>

<div class="control-group">
	{{ Form::label('first_name', 'Fullname') }}
	<div class="control">
		{{ Form::text('first_name') }}
	</div>
</div>

@foreach($groups as $group)
{{ Form::checkbox('groups[]', $group->id) }} <label>{{ $group->name }}</label><br />
@endforeach

<div class="form-actions">
	{{ Form::submit('Save', array('class' => 'btn btn-success btn-save btn-large')) }}
	<a href="{{ URL::route('users.index') }}" class="btn btn-large">Cancel</a>
</div>


{{ Form::close() }}


<script type="text/javascript">
$(function() {


	$( "#searchemployee" ).autocomplete({
		source: function( request, response ) {
			$.ajax({
				url: "/employeesrest/jsonlist",
				data: {
					fullname: request.term
				},
				success: function( data ) {
					response( $.map( data, function( item ) {
						return {
							mdata: item,
							label: item.fullname,
							value: item.fullname
						}
					})); 
				}
			});
		},
		minLength: 2,
		select: function( event, ui ) {
			$('#employee_id').val(ui.item.mdata.id);
			$('#first_name').val(ui.item.mdata.fullname);
			$('#email').val(ui.item.mdata.email);
		},
		open: function() {
			$( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
		},
		close: function() {
			$( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
		}
	});

});
</script>

@stop