@extends('main')
@section('content')
<style>
	.uper{
		margin-top: 40px;
	}
</style>
<div class="card uper">
	<div class="card-header">
		Edit data Jadwal
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
		<form method="post" action="{{ route('jadwals.update', $jadwal->id) }}">
			@method('PATCH')
			@csrf
			<div class="form-group">
				<label for="name">Nama Pasien :</label>
				<input type="text" name="pasien" class="form-control" value="{{ $jadwal->pasien }}">
			</div>
			<div class="form-group">
				<label for="price">Nama Dokter :</label>
				<input type="text" name="dokter" class="form-control" value="{{ $jadwal->dokter }}">
			</div>
			<div class="form-group">
				<label for="quantity">Penyakit :</label>
				<input type="text" name="penyakit" class="form-control" value="{{ $jadwal->penyakit }}">
			</div>
			<div class="form-group">
				<label for="name">Dari Jam :</label>
				<input type="text" name="dr_jam" class="form-control" value="{{ $jadwal->dr_jam }}">
			</div>
			<div class="form-group">
				<label for="name">Sampai Jam :</label>
				<input type="text" name="sd_jam" class="form-control" value="{{ $jadwal->sd_jam }}">
			</div>
			<button type="submit" class="btn btn-primary">Update</button>
		</form>
	</div>
</div>
@endsection
