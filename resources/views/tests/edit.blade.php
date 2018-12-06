@extends('main')
@section('content')
<style>
	.uper{
		margin-top: 40px;
	}
</style>
<div class="card uper">
	<div class="card-header">
		Edit data pasien
	</div>
	<div class="card-body">
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		<br>
		@endif
		<form method="post" action="{{ route('tests.update', $test->id) }}">
			@method('PATCH')
			@csrf
			<div class="form-group">
				<label for="name">Nama Pasien :</label>
				<input type="text" name="pasien" class="form-control" value="{{ $test->pasien }}">
			</div>
			<div class="form-group">
				<label for="price">Usia :</label>
				<input type="text" name="usia" class="form-control" value="{{ $test->usia }}">
			</div>
			<div class="form-group">
				<label for="quantity">Penyakit :</label>
				<input type="text" name="penyakit" class="form-control" value="{{ $test->penyakit }}">
			</div>
			<div class="form-group">
				<label for="name">Alamat :</label>
				<input type="text" name="alamat" class="form-control" value="{{ $test->alamat }}">
			</div>
			<button type="submit" class="btn btn-primary">Update</button>
		</form>
	</div>
</div>
@endsection
