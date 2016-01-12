@inject('penduduk','App\Personal')
@extends('template.create')
@section('box-header')
	<h4>Tambah Penduduk</h4>
@stop
@section('box-content')

	<form class="form-horizontal" action="{{route('kartu_keluarga.penduduk.sync',$data->id)}}" method="POST">
		<div class="box-body">
			<div class="form-group col-md-12">
				<select  name="penduduk[]" multiple  id="penduduk"class="form-control">
					@foreach ( $penduduk->lists('nama','id') as $key => $value)

						<option
						@if (isset($data))
							@foreach ($data->penduduk as $penduduk)
								@if ($penduduk->id == $key)
									selected="selected"
								@endif
							@endforeach
						@endif
						value="{{$key}}">
							{{$value}}
						</option>
					@endforeach
				</select>
			</div>
		</div>
		<div class="box-footer">
			<button class="btn btn-primary pull-right">Simpan</button>
		</div>
	</form>
@stop