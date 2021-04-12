@extends('layout')

@section('content')

<a href="{{ route('skills.create') }}">Create new candidate</a><br/>



<table style="margin-top:30px;" border="1">
	<thead>
		<th>Name</th>
		<th>Age</th>
		<th>Gender</th>
		<th>Skills</th>
		<th>Delete</th>
	</thead>
	@foreach($candidates as $cand)

		@php 
			$skills = [];
			foreach($cand->skills as $skill) {
				$skills[] = $skill->language;
			}	

			if(empty($skills)) $skills[] = 'None';

		@endphp

		<tr>
			<td>{{ ucfirst($cand->name) }}</td>
			<td>{{ $cand->age }}</td>
			<td>{{ $cand->gender }}</td>
			<td>{{ implode(',',$skills) }}</td>
			<td>
				
				<form onSubmit="return confirm('Do you want to delete ?');" method="post" action="{{ route('skills.destroy', $cand->id )}}">
					@method('DELETE')
					@csrf()
					<input type="submit" value="Delete" />
				</form>

			</td>
		</tr>
	@endforeach
</table>

@endsection