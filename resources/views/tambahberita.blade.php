@extends('template')
@section('page_name','Tambah Berita TMKP')
@section('content')
<div class="row">
	<div class="col-sm-12 col-md-12 col-lg-12">
		<div class="card">
			<div class="card-header card-header-success">
				Tambah Berita TMKP
			</div>
			<div class="card-body">
				<form action="" method="POST">
					@csrf
					<div class="input-group input-group-outline">
						<label class="form-label">Nama Berita</label>
						<input type="text" name="nama_berita" class="form-control">
					</div>
					<br>
					<div class="input-group input-group-outline">
						<label class="form-label">Nama Berita</label>
						<input type="text" name="nama_berita" class="form-control">
					</div>
					<br>
					<div class="input-group">
						<button type="submit" class="btn btn-success">Tambah Berita</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection