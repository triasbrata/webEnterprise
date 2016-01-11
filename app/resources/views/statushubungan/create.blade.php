@extends('template.create')
@section('box-header')
	<h4>Tambah Status</h4>
@stop
@section('box-content')
	<form class="form-horizontal" action="{{url('statushubungan')}}" method="POST">
		<div class="box-body">
				@include($form)
		</div>
		<div class="box-footer">
			<button class="btn btn-primary pull-right">Simpan</button>
		</div>
	</form>
@stop