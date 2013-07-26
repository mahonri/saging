@extends('_layouts.default')

@section('content')

@foreach($users as $user)

<a href="{{ URL::route('users.edit', $user->id) }}">{{ $user->first_name }}</a>
{{ $user->email }} 
@foreach($user->getGroups() as $group)
{{ $group->name }}
@endforeach
<br />

@endforeach

@stop