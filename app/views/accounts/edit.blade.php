{{ Form::model($account, array('method' => 'put', 'route' => array('accounts.update', $account->id))) }}

    <div class="control-group">
        {{ Form::label('emplid', 'Emplid') }}
        <div class="controls">
            {{ Form::text('emplid') }}
        </div>
    </div>

    <div class="control-group">
        {{ Form::label('username', 'Username') }}
        <div class="controls">
            {{ Form::text('username') }}
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
        <a href="{{ URL::route('accounts.index') }}" class="btn btn-large">Cancel</a>
    </div>

{{ Form::close() }}
 