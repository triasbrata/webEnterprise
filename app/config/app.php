<?php 
	return[

		'Alias'=>
			[
				'Route'=>Illuminate\Support\Facades\Route::class,
				'App'=>Illuminate\Support\Facades\App::class,
				'DB'=>Illuminate\Support\Facades\DB::class,
				'Response'=>Illuminate\Support\Facades\Response::class,
				'View'=>Illuminate\Support\Facades\View::class,
				'Config'=>Illuminate\Support\Facades\Config::class,
				'File'=>Illuminate\Support\Facades\File::class,
				'Request'=>Illuminate\Support\Facades\Request::class,
				'Session'=>Illuminate\Support\Facades\Session::class,
			],
		'Service'=> [
				Illuminate\Events\EventServiceProvider::class,
				Illuminate\Routing\RoutingServiceProvider::class,
				Illuminate\Filesystem\FilesystemServiceProvider::class,
				App\Providers\ViewServiceProvider::class,
				App\Providers\DatabaseServiceProvider::class,
				// App\Providers\ConfigServiceProvider::class,
				// Illuminate\Session\SessionServiceProvider::class,
				Illuminate\Translation\TranslationServiceProvider::class,
				Illuminate\Validation\ValidationServiceProvider::class,

				
				// App\Providers\RouteServiceProvider::class,
		],
		'Bind'=>[
				// 'config' => Illuminate\Config\Repository::class,
				Illuminate\Contracts\View\Factory::class => 'view',
		],
	];