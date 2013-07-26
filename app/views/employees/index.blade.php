@extends('_layouts.default')

@section('content')

@foreach($employees as $employee)

<a href="{{ URL::route('employees.show', $employee->id) }}">{{ $employee->adusername }}</a>
{{ $employee->fullname }}
{{ $employee->email }} <br />

@endforeach

{{ $employees->links() }}

@stop