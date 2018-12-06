@extends('main')
@section('content')
<style >
	.uper{
		margin-top: 40px;
	}
</style>
<div class="card uper">
	<div class="card-header">
		Tambah Pasien Baru
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
		<form method="post" action="{{ route('tests.store') }}">
			<div class="form-group">
				@csrf
				<label for="name">Nama Pasien :</label>
				<input type="text" name="pasien" class="form-control">
			</div>
			<div class="form-group">
				@csrf
				<label for="name">Usia :</label>
				<input type="text" name="usia" class="form-control">
			</div>
			<div class="form-group">
				@csrf
				<label for="name">Penyakit :</label>
				<input type="text" name="penyakit" class="form-control">
			</div>
			<div class="form-group">
				@csrf
				<label for="name">Alamat :</label>
				<input type="text" name="alamat" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Tambah Pasien</button>
		</form>
	</div>
</div>
@endsection