<p><a href="{{ URL::route('accounts.edit', $account->id) }}">{{ $account->id }}</a></p>
<p>{{ $account->emplid }}</p>
<p>{{ $account->username }}</p>
<p>{{ $account->email }}</p>
<!--//'route' => array('lfcsystems.destroy', $lfcsystem->id), 
href="{{ URL::route('accounts.destroy', $account->id) }}"-->

{{ Form::open(array('route' => array('accounts.destroy', $account->id), 'method' => 'delete')) }}
    <button type="submit" class="btn btn-danger btn-mini">Delete</butfon>
{{ Form::close() }}
