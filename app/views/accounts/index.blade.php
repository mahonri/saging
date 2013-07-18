
<h1>Index Page</h1>

<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Emplid</th>
			<th>Username</th>
			<th>Email</th>
		</tr>
	</thead>
	<tbody>
		@foreach($accounts as $account)
			<tr>
				<td><a href="{{ URL::route('accounts.show', $account->id) }}">{{ $account->id }}</a></td>
				<td>{{ $account->emplid }}</td>
				<td>{{ $account->username }}</td>
				<td>{{ $account->email }}</td>
			</tr>
		@endforeach
	</tbody>

</table>