@extends('main')
@section('content')
<style >
	.uper{
		margin-top: 40px;
	}
</style>
<div class="card uper">
	<div class="card-header">
		Tambah Dokter Baru
	</div>
	<div class="card-body">
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				 <li>{{ $error }}</li>
				@endforeach
			</ul>
		</div><br>
		@endif
		<form method="post" action="{{ route('dokters.store') }}">
			<div class="form-group">
				@csrf
				<label for="name">Nama Dokter :</label>
				<input type="text" name="dokter" class="form-control">
			</div>
			<div class="form-group">
				@csrf
				<label for="name">Usia :</label>
				<input type="text" name="usia" class="form-control">
			</div>
			<div class="form-group">
				@csrf
				<label for="name">Spesialis :</label>
				<input type="text" name="spesialis" class="form-control">
			</div>
			<div class="form-group">
				@csrf
				<label for="name">Alamat :</label>
				<input type="text" name="alamat" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Tambah Dokter</button>
		</form>
	</div>
</div>
@endsection