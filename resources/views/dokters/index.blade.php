@extends('main')
@section('content')

<style>
	.uper{
		margin-top: 40px;
	}
	.tittle{
		font-size: 18px;
	}
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="collapse navbar-collapse">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="{{ url('/') }}" class="nav-link">Data Pasien</a>
			</li>
			<li class="nav-item">
				<a href="{{ url('/dokter') }}" class="nav-link">Data Dokter</a>
			</li>
			<li class="nav-item">
				<a href="{{ url('/jadwal') }}" class="nav-link">Data Jadwal Operasi</a>
			</li>
		</ul>
		</div>
	</nav>
<div class="uper">
	@if(session()->get('success'))
	<div class="alert alert-success">
		{{ session()->get('success') }}
	</div><br>
	@endif
	<div class="jumbotron">
		<div class="tittle">Contoh CRUD Laravel : Data Admin di Rumah Sakit </div>
	</div>
	<table class="table table-striped">
		<thead style="background-color: #596067; color: white;">
			<tr>
				<td>ID</td>
				<td>Nama Dokter</td>
				<td>Usia</td>
				<td>Spesialis</td>
				<td>Alamat</td>
				<td colspan="2">Action</td>
			</tr>
		</thead>
		<tbody>
			@foreach($dokters as $dokter)
			<tr>
				<td>{{$dokter->id}}</td>
				<td>{{$dokter->dokter}}</td>
				<td>{{$dokter->usia}}</td>
				<td>{{$dokter->spesialis}}</td>
				<td>{{$dokter->alamat}}</td>
				<td><a href="{{ route('dokters.edit', $dokter->id) }}" class="btn btn-primary">Edit</a></td>
				<td>
					<form action="{{ route('dokters.destroy',$dokter->id) }}" method="post">
						@csrf
						@method('DELETE')
						<button class="btn btn-danger" type="submit">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<br><br>
	<center><a href="{{ url('/add-dokter') }}" class="align-center"><button class="btn btn-secondary">Tambah Data Dokter</button></a> </center>
</div>
@endsection
