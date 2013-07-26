@extends('_layouts.default')

@section('content')

<p><a href="{{ URL::route('accounts.edit', $account->id) }}">{{ $account->id }}</a></p>
<p>{{ $account->emplid }}</p>
<p>{{ $account->username }}</p>
<p>{{ $account->email }}</p>

<hr>

@foreach($account->roles as $role)

{{ $role->name }}	{{ $role->description }} <br />

@endforeach

<hr>

<!--//'route' => array('lfcsystems.destroy', $lfcsystem->id), 
	href="{{ URL::route('accounts.destroy', $account->id) }}"-->


	{{ Form::model($account, array('method' => 'put', 'route' => array('accounts.changestatus', $account->id))) }}
	<button type="submit" class="btn btn-danger btn-mini">
		@if( count($account->accountstates) > 0 && $account->accountstates[0]->status) 
		Disable
		@else
		Enable
		@endif
	</button>
	{{ Form::close(); }}
	<hr>

	@foreach($account->accountstates as $state)
	

	{{ $state->status}} {{ $state->created_at }} || {{ $state->ended_at }}<br />

	@endforeach


	{{ Form::open(array('route' => array('accounts.destroy', $account->id), 'method' => 'delete')) }}
	<button type="submit" class="btn btn-danger btn-mini">Delete</button>
	{{ Form::close() }}

@stop