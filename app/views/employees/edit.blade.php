@extends('_layouts.default')

@section('content')

{{ Form::model($employee, array('method' => 'put', 'route' => array('employees.update', $employee->id))) }}

<div class="control-group">
    {{ Form::label('adusername', 'AD Username') }}
    <div class="controls">
        {{ Form::text('adusername') }}
    </div>
</div>

<div class="control-group">
    {{ Form::label('fullname', 'Fullname') }}
    <div class="controls">
        {{ Form::text('fullname') }}
    </div>
</div>

<div class="control-group">
    {{ Form::label('email', 'Email') }}
    <div class="controls">
        {{ Form::text('email') }}
    </div>
</div>

<div class="form-actions">
    {{ Form::submit('Update', array('class' => 'btn btn-success btn-save btn-large')) }}
</div>

{{ Form::close() }}

@stop 