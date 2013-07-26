@extends('_layouts.default')

@section('content')

	@foreach($permissions as $permission)

		<a href="{{ URL::route('permissions.show', $permission->id) }}">{{ $permission->humanreadablename }}</a>
		{{ $permission->computerreadablename }}<br />

	@endforeach

@stop