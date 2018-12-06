@extends('main')
@section('content')
<style >
	.uper{
		margin-top: 40px;
	}
</style>
<div class="card uper">
	<div class="card-header">
		Tambah Jadwal Baru
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
		<form method="post" action="{{ route('jadwals.store') }}">
			<div class="form-group">
				@csrf
				<label for="name">Nama Pasien :</label>
				<input type="text" name="pasien" class="form-control">
			</div>
			<div class="form-group">
				@csrf
				<label for="name">Nama Dokter :</label>
				<input type="text" name="dokter" class="form-control">
			</div>
			<div class="form-group">
				@csrf
				<label for="name">Penyakit :</label>
				<input type="text" name="penyakit" class="form-control">
			</div>
			<div class="form-group">
				@csrf
				<label for="name">Dari Jam :</label>
				<input type="text" name="dr_jam" class="form-control">
			</div>
			<div class="form-group">
				@csrf
				<label for="name">Sampai Jam :</label>
				<input type="text" name="sd_jam" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Tambah Jadwal</button>
		</form>
	</div>
</div>
@endsection