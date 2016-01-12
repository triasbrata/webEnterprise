@extends('template.index')
@section('box-header')
	<h4>Manajement Penduduk</h4>
	<div class="pull-right">
		<a href="{{url('penduduk/create')}}" class="btn btn-primary btn-sm">Tambah Penduduk</a>
	</div>
@stop
@section('box-content')
	<table class="table table-stripped" id="datatable">
		<thead>
			<tr>
				<th>No</th>
				<th>NIK</th>
				<th>Nama Penduduk</th>
				<th>Jenis Kelamin</th>
			</tr>
			<?php $x=1; ?>
			@foreach ($data as $penduduk)
				<tr>
					<td> {{$x++}} </td>
					<td> {{$penduduk->nik}} </td>
					<td> {{$penduduk->nama}} </td>
					<td> {{$penduduk->jenis_kelamin}} </td>
					 <td>
						<form action="{{url('penduduk/'.$penduduk->id)}}" method="POST" class="pull-right">
							<input name="_method" type="hidden" value="DELETE">
							<div class="btn-group">
							  	<a class="btn btn-flat btn-info btn-sm" href="{{url('penduduk/'.$penduduk->id.'/edit')}}"><i class="fa fa-pencil"></i> Ubah</a>
							  	<a class="btn btn-flat btn-warning btn-sm" href="{{url('penduduk/'.$penduduk->id)}}"><i class="fa fa-eye"></i> Lihat</a>
							  	<button type="submit" class="btn btn-danger btn-flat btn-sm"><i class="fa fa-eraser"></i> Hapus</button>
					  		</div>
						</form>
					</td>
				</tr>
			@endforeach
		</thead>
	</table>
@stop

