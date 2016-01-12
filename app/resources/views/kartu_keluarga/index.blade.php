@extends('template.index')
@section('box-header')
	<h4>Manajement Kartu Keluarga</h4>
	<div class="pull-right">
		<a href="{{url('kartu_keluarga/create')}}" class="btn btn-primary btn-sm">Tambah Kartu Keluarga</a>
	</div>
@stop
@section('box-content')
	<table class="table table-stripped" id="datatable">
		<thead>
			<tr>
				<th>No</th>
				<th>No. Kartu Keluarga</th>
				<th>Nama Kepala Keluarga</th>
				<th>Alamat</th>
				<th>Kelurahan</th>
			</tr>
			<?php $x=1; ?>
			@foreach ($data as $kartu_keluarga)
				<tr>
					<td> {{$x++}} </td>
					<td> {{$kartu_keluarga->no_kk}} </td>
					<td> {{$kartu_keluarga->kepala_keluarga->nama}} </td>
					<td> {{$kartu_keluarga->alamat}} </td>
					<td> {{$kartu_keluarga->kelurahan->label}} </td>
					 <td>
						<form action="{{url('kartu_keluarga/'.$kartu_keluarga->id)}}" method="POST" class="pull-right">
							<input name="_method" type="hidden" value="DELETE">
							<div class="btn-group">
							  	<a class="btn btn-flat btn-info btn-sm" href="{{url('kartu_keluarga/'.$kartu_keluarga->id.'/edit')}}"><i class="fa fa-pencil"></i> Ubah</a>
							  	<a class="btn btn-flat btn-warning btn-sm" href="{{url('kartu_keluarga/'.$kartu_keluarga->id)}}"><i class="fa fa-eye"></i> Lihat</a>
							  	<button type="submit" class="btn btn-danger btn-flat btn-sm"><i class="fa fa-eraser"></i> Hapus</button>
					  		</div>
						</form>
					</td>
				</tr>
			@endforeach
		</thead>
	</table>
@stop

