@extends('_layouts.default')

@section('content')

<a href="{{ URL::route('lfcsystems.edit', $lfcsystem->id) }}">{{ $lfcsystem->id }}</a><br />
{{ $lfcsystem->name }}<br />
{{ $lfcsystem->admin }}<br />
{{ $lfcsystem->description }}<br />

<div>
	<label>Employee Name</label>
	<input input="text" id="employeename"/>
</div>

{{ Form::open(array('route' => 'accounts.store')) }}
		{{ Form::hidden('lfcsystem_id', $lfcsystem->id)}}
	<div class="control-group">
		{{ Form::label('emplid', 'Emplid') }}
		<div class="control">
			{{ Form::text('emplid', '', array('readonly' => 'readonly')) }}
		</div>
	</div>

	<div class="control-group">
		{{ Form::label('lname', 'Lastname') }}
		<div class="control">
			{{ Form::text('lname', '', array('readonly' => 'readonly')) }}
		</div>
	</div>

	<div class="control-group">
		{{ Form::label('fname', 'Firstname') }}
		<div class="control">
			{{ Form::text('fname', '', array('readonly' => 'readonly')) }}
		</div>
	</div>

	<div class="control-group">
		{{ Form::label('mname', 'Middlename') }}
		<div class="control">
			{{ Form::text('mname', '', array('readonly' => 'readonly')) }}
		</div>
	</div>

	 <div class="form-actions">
        {{ Form::submit('Save', array('class' => 'btn btn-success btn-save btn-large')) }}
        <a href="{{ URL::route('accounts.index') }}" class="btn btn-large">Cancel</a>
    </div>


{{ Form::close() }}

<a href="{{ URL::route('roles.systemrole', $lfcsystem->id)}}">Create Role</a>
	
	<hr>

	@foreach($roles as $role)
		{{ $role->name }}
		{{ $role->description }} <br />
	@endforeach

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


<script type="text/javascript">
$(function() {

	$( "#employeename" ).autocomplete({
		source: function( request, response ) {
			$.ajax({
				url: "/employees/jsonlist",
				data: {
					lname: request.term
				},
				success: function( data ) {
					response( $.map( data, function( item ) {
						return {
							mdata: item,
							label: item.lname + ", " + item.fname + " " + item.mname,
							value: item.lname
						}
					})); 
				}
			});
		},
		minLength: 2,
		select: function( event, ui ) {
			$('#emplid').val(ui.item.mdata.emplid);
			$('#lname').val(ui.item.mdata.lname);
			$('#fname').val(ui.item.mdata.fname);
			$('#mname').val(ui.item.mdata.mname);
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