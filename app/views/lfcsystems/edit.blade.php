@extends('_layouts.default')

@section('content')

{{ Form::model($lfcsystem, array('method' => 'put', 'route' => array('lfcsystems.update', $lfcsystem->id))) }}

<div class="control-group">
    {{ Form::label('name', 'Name') }}
    <div class="controls">
        {{ Form::text('name') }}
    </div>
</div>

<div class="control-group">
    {{ Form::label('admin', 'Administrator') }}
    <div class="controls">
        {{ Form::text('admin') }}
    </div>
</div>

<div class="control-group">
    {{ Form::label('description', 'Description') }}
    <div class="controls">
        {{ Form::textarea('description') }}
    </div>
</div>

<div class="form-actions">
    {{ Form::submit('Update', array('class' => 'btn btn-success btn-save btn-large')) }}
    <a href="{{ URL::route('lfcsystems.index') }}" class="btn btn-large">Cancel</a>
</div>

{{ Form::close() }}

@stop 