@extends('_layouts.default')

@section('content')

@foreach($groups as $group)

{{ $group->name }} 
	@foreach($group->permissions as $key => $value)
		{{ $key }}
	@endforeach
<br />

@endforeach

@stop