@extends('template.create')
@section('box-header')
	<h4>Tambah Provinsi</h4>
@stop
@section('box-content')
	<form class="form-horizontal" action="{{route('provinsi.update',$data->id)}}" method="POST">
		<input type="hidden" name="_method" value="PATCH">
		<div class="box-body">
				@include($form)
		</div>
		<div class="box-footer">
			<button class="btn btn-primary pull-right">Simpan</button>
		</div>
	</form>
@stop