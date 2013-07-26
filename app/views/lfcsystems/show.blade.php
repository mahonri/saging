@extends('_layouts.default')

@section('content')

<a href="{{ URL::route('lfcsystems.edit', $lfcsystem->id) }}">{{ $lfcsystem->id }}</a><br />
{{ $lfcsystem->name }}<br />
{{ $lfcsystem->admin }}<br />
{{ $lfcsystem->description }}<br />

<div>
	<label>Employee Name</label>
	<input input="text" id="searchfullname"/>
</div>

{{ Form::open(array('route' => 'accounts.store')) }}


{{ Form::hidden('lfcsystem_id', $lfcsystem->id)}}
{{ Form::hidden('employee_id', '' , array('id' => 'employee_id')) }}

<div class="control-group">
	{{ Form::label('username', 'Username') }}
	<div class="control">
		{{ Form::text('username') }}
	</div>
</div>

<div class="control-group">
	{{ Form::label('adusername', 'AD username') }}
	<div class="control">
		{{ Form::text('adusername', '', array('readonly' => 'readonly')) }}
	</div>
</div>

<div class="control-group">
	{{ Form::label('fullname', 'Fullname') }}
	<div class="control">
		{{ Form::text('fullname', '', array('readonly' => 'readonly')) }}
	</div>
</div>

<div class="control-group">
	{{ Form::label('email', 'Email') }}
	<div class="control">
		{{ Form::text('email', '', array('readonly' => 'readonly')) }}
	</div>
</div>

@foreach($lfcsystem->roles as $role)
{{ Form::checkbox('roles[]', $role->id) }} <label>{{ $role->name }}</label><br />
@endforeach


<div class="form-actions">
	{{ Form::submit('Save', array('class' => 'btn btn-success btn-save btn-large')) }}
	<a href="{{ URL::route('accounts.index') }}" class="btn btn-large">Cancel</a>
</div>


{{ Form::close() }}

<a href="{{ URL::route('roles.systemrole', $lfcsystem->id)}}">Create Role</a>

<hr>


<hr>

<table>
	<tr>
		<th>Username</th>
		<th>ADUsername</th>
		<th>Fullname</th>
		<th>Email</th>
		<th>Permissions</th>
	</tr>

	@foreach ($accounts as $account)
	<tr>
		<td><a href="{{ Url::route('accounts.show', $account->id) }}">{{ $account->username }}</a></td>
		<td>{{ $account->employee->adusername }}</td>
		<td>{{ $account->employee->fullname }}</td>
		<td>{{ $account->employee->email }}</td>

	</tr>
	@endforeach

</table>

<?php echo $accounts->links(); ?>



{{ Form::open(array('route' => array('lfcsystems.destroy', $lfcsystem->id), 'method' => 'delete')) }}
<button type="submit" class="btn btn-danger btn-mini">Delete</butfon>
	{{ Form::close() }}


	<script type="text/javascript">
	$(function() {


		$( "#searchfullname" ).autocomplete({
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
				$('#adusername').val(ui.item.mdata.adusername);
				$('#fullname').val(ui.item.mdata.fullname);
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