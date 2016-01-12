@extends('template')
@section('content')
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-warning">
				<div class="box-header with-border">
					<div class="box-title">Lihat Detail Data Kartu Penduduk</div>
					<div class="box-tools pull-right">
						<a href="{{ route('kartu_keluarga.penduduk',$data->id) }}" class="btn btn-primary btn-xs">Tambah Penduduk</a>
					</div>
				</div>
				<div class="box-body">
						@if ($session->has('success'))
						<div class="callout callout-success">
								<h4>Berhasil :D</h4>
								<p>{{$session->get('success')}}</p>
							</div>
					@endif
				<div class="row">
					<div class="col-xs-12 text-center"><h2>Kartu Keluarga</h2></div>
					<div class="col-xs-12 text-center"><h4>No. {{$data->no_kk}}</h4></div>
				</div>
				<table class="table">
					<tr>
						<td>Kepala Keluarga</td>
						<td>:</td>
						<td>{{$data->kepala_keluarga->nama}}</td>
						<td width="20%"></td>
						<td>Kematan</td>
						<td>:</td>
						<td>{{$data->kecamatan->label}}</td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>{{$data->alamat}}</td>
						<td width="20%"></td>
						<td>Kabupaten</td>
						<td>:</td>
						<td>{{$data->kepala_keluarga->nama}}</td>
					</tr>
					<tr>
						<td>RT/RW</td>
						<td>:</td>
						<td>{{$data->rt}}/{{$data->rw}}</td>
						<td width="20%"></td>
						<td>Kode Pos</td>
						<td>:</td>
						<td>{{$data->kd_pos}}</td>
					</tr>
					<tr>
						<td>Desa/ Kelurahan</td>
						<td>:</td>
						<td>{{$data->kelurahan->label}}</td>
						<td width="20%"></td>
						<td>Provinsi</td>
						<td>:</td>
						<td>{{$data->provinsi->label}}</td>
					</tr>
				</table>
				<div class="table-responsive">
					<table class="table table-striped">
						<tr>	
							<th width="100px">NIK</th>
							<th width="300px">Nama Penduduk</th>
							<th width="100px">Jenis Kelamin</th>
							<th width="400px">Tempat,Tanggal Lahir</th>
							<th width="100px">Agama</th>
							<th width="100px">Pendidikan</th>
							<th width="150px">Status Dalam Keluarga</th>
							<th width="100px">Kewarganegaraan</th>
							<th width="100px">No. Passport</th>
							<th width="100px">No. KITAS</th>
							<th width="300px">Ayah</th>
							<th width="300px">Ibu</th>
						</tr>
						@foreach ($data->penduduk as $penduduk)
							
								<tr>
									<td>{{$penduduk->nik}}</td>
									<td>{{$penduduk->nama}}</td>
									<td>{{$penduduk->jenis_kelamin}}</td>
									<td>{{$penduduk->tempat_lahir}},{{$penduduk->tanggal_lahir}}</td>
									<td>{{$penduduk->agama->title}}</td>
									<td>{{$penduduk->pendidikan->title}}</td>
									<td>{{$penduduk->status_keluarga->title}}</td>
									<td>{{$penduduk->kewarganegaraan}}</td>
									<td>{{$penduduk->no_pasport}}</td>
									<td>{{$penduduk->no_kitas}}</td>
									<td>{{$penduduk->ayah}}</td>
									<td>{{$penduduk->ibu}}</td>
								</tr>
						@endforeach
					</table>
				</div>	
				</div>
				<div class="box-footer">
					<div class="pull-right">
						<a href="{{ route('penduduk.index') }}" class="btn btn-primary">Kembali</a>
					</div>
				</div>
			</div>	
		</div>
	</div>
@stop