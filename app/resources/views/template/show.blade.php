@extends('template')
@section('content')
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-warning">
				<div class="box-header with-border">
					@yield('box-header', 'Header')
				</div>
				<div class="box-body">
					@yield('box-content', 'Content')
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