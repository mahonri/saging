@extends('_layouts.default')

@section('content')

@foreach($groups as $group)

{{ $group->name }} <br />

@endforeach

@stop