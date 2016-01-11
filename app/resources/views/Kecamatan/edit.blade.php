@extends('template.create')
@section('box-header')
	<h4>Tambah Kecamatan</h4>
@stop
@section('box-content')
	<form class="form-horizontal" action="{{route('kecamatan.update',$data->id)}}" method="POST">
		<input type="hidden" name="_method" value="PATCH">
		<div class="box-body">
				@include($form)
		</div>
		<div class="box-footer">
			<button class="btn btn-primary pull-right">Simpan</button>
		</div>
	</form>
@stop