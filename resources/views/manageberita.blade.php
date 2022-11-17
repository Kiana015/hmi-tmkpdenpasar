@extends('template')
@section('page_name','Manage Berita TMKP')
@section('content')
<div class="row">
	<div class="col-sm-12 col-md-12 col-lg-12">
		<div class="card my-4">
			<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
				<div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                	<h6 class="text-white text-capitalize ps-3">Manage Berita TMKP</h6>
              	</div>
			</div>
			<div class="card-body">
				<a href="/tambahBerita"><button class="btn btn-success"><i class="fa fa-plus"></i> Tambah Berita</button></a>
				<table class="table table-borderless" id="myTable">
					<thead>
						<tr>
							<th>No</th>
							<th>Header</th>
							<th>Tgl Berita</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						?>
						@foreach($allberita as $fetchberita)
						<?php
						$tgl = date('d M Y',strtotime($fetchberita->tgl_berita));
						?>
						<tr>
							<td>{{$no}}</td>
							<td>{{$fetchberita->judul_berita}}</td>
							<td>{{$fetchberita->tempat}}, {{$tgl}}</td>
							<td><a href="/editBerita/{{$fetchberita->id}}" style="margin-right: 20px;"><i class="fa fa-edit"></i></a> <a href="/hapusBerita/{{$fetchberita->id}}" onclick="return confirm('Apakah Anda Ingin Menghapus Berita?')"><i class="fa fa-trash"></i></a></td>
						</tr>
						<?php
						$no++;
						?>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection