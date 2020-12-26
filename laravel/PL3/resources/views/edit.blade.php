@extends('parent')

@section('main')
<div align="right">
	<a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
</div>
<br />

<form method="post" action="{{ route('crud.update', $data->id) }}" enctype="multipart/form-data">

	@csrf
	@method('PATCH')
	{{-- <div class="form-group">
		<label class="col-md-4 text-right">Enter First Name</label>
		<div class="col-md-8">
			<input type="text" name="first_name" value="{{ $data->first_name }}" class="form-control input-lg" />
		</div>
	</div> --}}
	{{-- <br />
	<br />
	<br /> --}}
	<div class="form-group">
		<label class="col-md-4 text-right">Enter NID</label>
		<div class="col-md-8">
			<input type="text" name="NID" value="{{ $data->NID }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Enter Fullname</label>
		<div class="col-md-8">
			<input type="text" name="Fullname" value="{{ $data->Fullname }}" class="form-control input-lg" />
			@error('Fullname')
			{{$message}}
			@enderror
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Enter Email</label>
		<div class="col-md-8">
			<input type="text" name="Email" value="{{ $data->Email }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Enter Mobile</label>
		<div class="col-md-8">
			<input type="text" name="Mobile" value="{{ $data->Mobile }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	<div class="form-group">
		<label class="col-md-4 text-right">Enter Address</label>
		<div class="col-md-8">
			<input type="text" name="Address" value="{{ $data->Address }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br />
	{{-- <div class="form-group">
		<label class="col-md-4 text-right">Enter Last Name</label>
		<div class="col-md-8">
			<input type="text" name="last_name" value="{{ $data->last_name }}" class="form-control input-lg" />
		</div>
	</div>
	<br />
	<br />
	<br /> --}}
	<div class="form-group">
		<label class="col-md-4 text-right">Select Profile Image</label>
		<div class="col-md-8">
			<input type="file" name="image" />
			<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
			<input type="hidden" name="hidden_image" value="{{ $data->image }}" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group text-center">
		<input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
	</div>
</form>
@endsection



