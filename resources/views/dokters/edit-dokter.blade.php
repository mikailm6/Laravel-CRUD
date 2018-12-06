@extends('main')
@section('content')
<style>
	.uper{
		margin-top: 40px;
	}
</style>
<div class="card uper">
	<div class="card-header">
		Edit data Dokter
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
		<form method="post" action="{{ route('dokters.update', $dokter->id) }}">
			@method('PATCH')
			@csrf
			<div class="form-group">
				<label for="name">Nama Dokter :</label>
				<input type="text" name="dokter" class="form-control" value="{{ $dokter->dokter }}">
			</div>
			<div class="form-group">
				<label for="price">Usia :</label>
				<input type="text" name="usia" class="form-control" value="{{ $dokter->usia }}">
			</div>
			<div class="form-group">
				<label for="quantity">Spesialis :</label>
				<input type="text" name="spesialis" class="form-control" value="{{ $dokter->spesialis }}">
			</div>
			<div class="form-group">
				<label for="name">Alamat :</label>
				<input type="text" name="alamat" class="form-control" value="{{ $dokter->alamat }}">
			</div>
			<button type="submit" class="btn btn-primary">Update</button>
		</form>
	</div>
</div>
@endsection
