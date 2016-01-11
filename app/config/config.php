<?php 
	return[
		'session'=>[
				'lottery'=> [2, 100],
				'cookie'=> 'webe',
				'path'=> '/',
				'domain'=> null,
				'driver'=> 'file',
				'lifetime' => 120,
        		'expire_on_close' => false,
				'files'=> base_path('temp/sessions'),
		],
		'app'=>[
			'locale' => 'en',
			'fallback_locale' => 'en',

		],
		'path'=>[
			'lang'=> base_path('resource/lang'),
		]
	];