@extends('template.index')
@section('box-header')
	<h4>Manajement Agama</h4>
	<div class="pull-right">
		<a href="{{url('agama/create')}}" class="btn btn-primary btn-sm">Tambah Agama</a>
	</div>
@stop
@section('box-content')
	<table class="table table-stripped" id="datatable">
		<thead>
			<tr>
				<th>No</th>
				<th>Agama</th>
				<th>Aksi</th>
			</tr>
			<?php $x=1; ?>
			@foreach ($data as $agama)
				<tr>
					<td>
						{{$x++}}
					</td>
					<td>
						{{$agama->title}}
					</td>
					<td>
						<form action="{{url('agama/'.$agama->id)}}" method="POST">
							<input name="_method" type="hidden" value="DELETE">
							<div class="btn-group">
							  	<a class="btn btn-flat btn-info btn-sm" href="{{url('agama/'.$agama->id.'/edit')}}"><i class="fa fa-pencil"></i> Ubah</a>
							  	<button type="submit" class="btn btn-danger btn-flat btn-sm"><i class="fa fa-eraser"></i> Hapus</button>
					  		</div>
						</form>
					</td>
				</tr>
			@endforeach
		</thead>
	</table>
@stop

