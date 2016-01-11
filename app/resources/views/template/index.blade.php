@extends('template')
@section('content')
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-info">
				<div class="box-header with-border">
					@yield('box-header', 'Header')
				</div>
				<div class="box-body">
					@if ($session->has('success'))
						<div class="callout callout-success">
								<h4>Berhasil :D</h4>
								<p>{{$session->get('success')}}</p>
							</div>
					@endif
					@yield('box-content', 'Content')
				</div>
			</div>	
		</div>
	</div>
@stop