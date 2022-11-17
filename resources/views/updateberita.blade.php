@extends('template')
@section('page_name','Update Berita TMKP')
@section('content')
<div class="row">
	<div class="col-sm-12 col-md-12 col-lg-12">
		<div class="card my-4">
			<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
				<div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                	<h6 class="text-white text-capitalize ps-3">Update Berita TMKP</h6>
              	</div>
			</div>
			<div class="card-body">
				<form action="/editBerita/{{$id}}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="input-group input-group-outline">
						<label class="form-label">Header Berita</label>
						<input type="text" name="header_berita" class="form-control" value="{{$databerita->judul_berita}}">
					</div>
					<br>
					<div class="input-group input-group-outline">
						<label class="form-label">Penulis Berita</label>
						<input type="text" name="penulis_berita" class="form-control" value="{{$databerita->penulis}}">
					</div>
					<br>
					<div class="input-group input-group-outline">
						<label class="form-label">Tempat Berita</label>
						<input type="text" name="tempat_berita" class="form-control" value="{{$databerita->tempat}}">
					</div>
					<br>
					<div class="form-group">
						<label>Isi Berita</label>
						<textarea name="isi_berita" id="editor">{{$databerita->isi}}</textarea>
					</div>
					<br>
					<label>Thumb Pict Berita (Kosongkan Jika Tidak Ingin Diubah)</label>
					<div class="input-group input-group-outline">
						<input type="file" name="thumb_pic_berita" class="form-control">
					</div>
					<br>
					<label class="form-label">Tayangkan Berita?</label>
					<div class="input-group input-group-outline">
						<select class="form-control" name="tayang" required>
							<option value=""></option>
							<option value="1" <?php if($databerita->tayang == 1) { ?> selected <?php } ?> >Tayangkan</option>
							<option value="0" <?php if($databerita->tayang == 0) { ?> selected <?php } ?>>Jangan Tayangkan</option>
						</select>
					</div>
					<br>
					<label class="form-label">Tipe Berita</label>
					<div class="input-group input-group-outline">
						<select class="form-control" name="tipe_berita" required>
							<option value=""></option>
							<option value="1" <?php if($databerita->tipe_berita == 1) { ?> selected <?php } ?>>Berita Biasa</option>
							<option value="2" <?php if($databerita->tipe_berita == 2) { ?> selected <?php } ?>>Panduan HMI</option>
						</select>
					</div>
					<br>
					<div class="input-group">
						<button type="submit" class="btn btn-success">Update Berita</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection