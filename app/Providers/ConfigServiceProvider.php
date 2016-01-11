<?php namespace App\Providers;
 /**
 * 
 */
 use Illuminate\Support\ServiceProvider;
 use Illuminate\Config\Repository as Config;

 class ConfigServiceProvider extends ServiceProvider
 {

 	public function register()
 	{
 		$this->registerConfig();
 	}
 	private function registerConfig()
 	{
 		$app = $this->app;
 		$app['config'] = new Config(require base_path('config/config.php'));
 	}
 }