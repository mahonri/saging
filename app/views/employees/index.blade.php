
@foreach($employees as $employee)

	{{ $employee->emplid }}
	{{ $employee->fname }}
	{{ $employee->mname }}
	{{ $employee->lname }}<br />

@endforeach