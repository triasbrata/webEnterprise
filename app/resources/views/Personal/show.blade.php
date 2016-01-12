@extends('template.show')
@section('box-header')
	Lihat Detail Data Penduduk
@stop
@section('box-content')
	<table class="table table-striped">
		<tr>
			<td>NIK</td>
			<td>:</td>
			<td>{{$data->nik}}</td>
		</tr>
		<tr>
			<td>Nama Penduduk</td>
			<td>:</td>
			<td>{{$data->nama}}</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>{{$data->jenis_kelamin}}</td>
		</tr>
		<tr>
			<td>Tempat,Tanggal Lahir</td>
			<td>:</td>
			<td>{{$data->tempat_lahir}},{{$data->tanggal_lahir}}</td>
		</tr>
		<tr>
			<td>Agama</td>
			<td>:</td>
			<td>{{$data->agama->title}}</td>
		</tr>
		<tr>
			<td>Pendidikan</td>
			<td>:</td>
			<td>{{$data->pendidikan->title}}</td>
		</tr>
		<tr>
			<td>Status Dalam Keluarga</td>
			<td>:</td>
			<td>{{$data->status_keluarga->title}}</td>
		</tr>
		<tr>
			<td>Kewarganegaraan</td>
			<td>:</td>
			<td>{{$data->kewarganegaraan}}</td>
		</tr>
		<tr>
			<td>No. Passport</td>
			<td>:</td>
			<td>{{$data->no_pasport}}</td>
		</tr>
		<tr>
			<td>No. KITAS</td>
			<td>:</td>
			<td>{{$data->no_kitas}}</td>
		</tr>
		<tr>
			<td>Ayah</td>
			<td>:</td>
			<td>{{$data->ayah}}</td>
		</tr>
		<tr>
			<td>Ibu</td>
			<td>:</td>
			<td>{{$data->ibu}}</td>
		</tr>
	</table>
@stop