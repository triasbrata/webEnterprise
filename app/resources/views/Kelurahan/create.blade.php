@extends('template.create')
@section('box-header')
	<h4>Tambah Kelurahan</h4>
@stop
@section('box-content')
	<form class="form-horizontal" action="{{url('kelurahan')}}" method="POST">
		<div class="box-body">
				@include($form)
		</div>
		<div class="box-footer">
			<button class="btn btn-primary pull-right">Simpan</button>
		</div>
	</form>
@stop