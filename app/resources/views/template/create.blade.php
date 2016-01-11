@extends('template')
@section('content')
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					@if ($session->has('error'))
						@foreach ($session->get('error')->all() as $error)
							<div class="callout callout-danger">
								<h4>Error!</h4>
								<p>{{$error}}</p>
							</div>
						@endforeach
					@endif
					@yield('box-header', 'Header')
				</div>
				@yield('box-content', 'Content')
			</div>	
		</div>
	</div>
@stop