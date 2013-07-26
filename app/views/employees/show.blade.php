@extends('_layouts.default')

@section('content')

{{ $employee->adusername }} <br />
{{ $employee->fullname }}<br />
{{ $employee->email }}<br />
<hr>

@foreach($employee->accounts as $account)

{{ $account->username }} {{ $account->lfcsystem->name }}

@foreach($account->roles as $role)
{{ $role->name }}
@endforeach

<br />

@endforeach

<hr>

<a href="{{ URL::route('employees.edit', $employee->id) }}">Edit</a>

{{ Form::open(array('route' => array('employees.destroy', $employee->id), 'method' => 'delete')) }}
<button type="submit" class="btn btn-danger btn-mini">Delete</button>
{{ Form::close() }}

@stop