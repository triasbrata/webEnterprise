<?php namespace App\Providers;
 /**
 * 
 */
 use Illuminate\Support\ServiceProvider;
 use Illuminate\Database\Capsule\Manager as Capsule;

 class DatabaseServiceProvider extends ServiceProvider
 {
 	private $capsule;
 	private $conf;
 	public function __construct($app,Capsule $capsule)
 	{
 		$this->capsule = $capsule;
 		$this->conf = (object)include_once app_path('config/db.php');
 		parent::__construct($app);
 	}
 	public function register()
 	{
 		$conf = $this->conf;

 		$this->capsule->addConnection($conf->connections[$conf->default]);
 		$this->app['db'] = $this->capsule->getDatabaseManager();
 		$this->capsule->bootEloquent();
 	}
 	
 }