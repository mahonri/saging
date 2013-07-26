@extends('_layouts.default')

@section('content')

<a href="{{ URL::route('lfcsystems.create') }}">Create</a>
<div style="width:980px; margin: auto;" >
	
	<div class="container">
		<table>
			<tr>
				<th>System Name</th>
				<th>Administrator</th>
				<th>Description</th>
			</tr>
			@foreach ($lfcsystems as $lfcsystem)
			<tr>
				<td><a href="{{ URL::route('lfcsystems.show', $lfcsystem->id) }}">{{ $lfcsystem->name }}</a></td>
				<td>{{ $lfcsystem->user->first_name }}</td>
				<td>{{ $lfcsystem->description }}</td>
			</tr>
			@endforeach
		</table>
	</div>

	<?php echo $lfcsystems->links(); ?>


</div>

@stop