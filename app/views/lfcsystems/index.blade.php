@extends('_layouts.default')

@section('content')

<a href="{{ URL::route('lfcsystems.create') }}" class="btn-icon btnadd"><span></span>Create</a>
<div style="width:980px; margin: auto;" >
	
	<div class="container">
		<table class="data display">
			<thead>
			<tr>
				<th>System Name</th>
				<th>Administrator</th>
				<th>Description</th>
			</tr>
			</thead>
			<tbody>
			@foreach ($lfcsystems as $lfcsystem)
			<tr>
				<td><a href="{{ URL::route('lfcsystems.show', $lfcsystem->id) }}">{{ $lfcsystem->name }}</a></td>
				<td>{{ $lfcsystem->user->first_name }}</td>
				<td>{{ $lfcsystem->description }}</td>
			</tr>
			@endforeach
			</tbody>
		</table>
	</div>

	<?php echo $lfcsystems->links(); ?>

</div>

@stop