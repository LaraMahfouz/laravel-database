@extends('parent')

@section('main')

<div align="right">
	<a href="{{ route('crud.create') }}" class="btn btn-success btn-sm">Add</a>
</div>
<br />
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered table-striped">
	<tr>
		<th width="">Image</th>
		{{-- <th width="">First Name</th> --}}

		<th width="">NID</th>
		<th width="">Fullname</th>
		<th width="">Email</th>
		<th width="">Mobile</th>
		<th width="">Address</th>

		{{-- <th width="">Last Name</th> --}}
		<th width="">Action</th>
	</tr>
	@foreach($data as $row)
		<tr>
			<td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
			{{-- <td>{{ $row->first_name }}</td> --}}

			<td>{{ $row->NID }}</td>
			<td>{{ $row->Fullname }}</td>
			<td>{{ $row->Email }}</td>
			<td>{{ $row->Mobile }}</td>
			<td>{{ $row->Address }}</td>

			{{-- <td>{{ $row->last_name }}</td> --}}
			<td>
				
				<form action="{{ route('crud.destroy', $row->id) }}" method="post">
					<a href="{{ route('crud.show', $row->id) }}" class="btn btn-primary">Show</a>
					<a href="{{ route('crud.edit', $row->id) }}" class="btn btn-warning">Edit</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
	@endforeach
</table>
{!! $data->links() !!}
@endsection