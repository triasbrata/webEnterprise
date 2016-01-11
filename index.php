<?php 
	require 'vendor/autoload.php';
	use Illuminate\Events\Dispatcher;
	use Illuminate\Http\Request;
	use Illuminate\Routing\Router;
	use Illuminate\Session\SessionManager;
	use Illuminate\Config\Repository as Config;
	use Illuminate\Filesystem\Filesystem;
	use Symfony\Component\HttpFoundation\Cookie;
	$basePath = str_finish(dirname(__FILE__), '/');
	
	$controllersDirectory = $basePath.'Http/Controllers';
	$modelsDirectory = $basePath.'app';
	
	Illuminate\Support\ClassLoader::register();
	Illuminate\Support\ClassLoader::addDirectories(array($controllersDirectory, $modelsDirectory));
	$app = new App\Application($basePath.'app');
	class_alias(Illuminate\Container\Container::class,Container::class);
	Container::setInstance($app);
	Illuminate\Support\Facades\Facade::setFacadeApplication($app);

	$app['app'] = $app;
	$app['env'] = 'production';
	$app['path'] = $basePath.'/app';
	$app['path.lang'] = base_path('resources/lang');
	$request = Illuminate\Http\Request::capture();
	$app['request'] = $request;
	/*load configure*/
	$app['config'] = new Config(require base_path('config/config.php'));
	/*end load configure*/
	/*init new filesystem and register to container*/
	$app['files'] = new Filesystem;
	/*end init new filesystem and register to container*/
	/*session manager*/
	$sessionManager = new SessionManager($app);
	$app['session.store'] = $sessionManager->driver();
	$app['session'] = $sessionManager;
	// In order to maintain the session between requests, we need to populate the
	// session ID from the supplied cookie
	$cookieName = $app['session']->getName();
	if (isset($_COOKIE[$cookieName])) {
	    if ($sessionId = $_COOKIE[$cookieName]) {
	        $app['session']->setId($sessionId);
	    }
	}
	// Boot the session
	$app['session']->start();
	/*end session manager*/
	/*setup cookie*/
		$cookie = new Cookie(
        $app['session']->getName(),
        $app['session']->getId(),
        time() + ($app['config']['session.lifetime'] * 60),
        '/',
        null,
        false
    );
    setcookie(
        $cookie->getName(),
        $cookie->getValue(),
        $cookie->getExpiresTime(),
        $cookie->getPath(),
        $cookie->getDomain()
    );
	/*end setup cookie*/
	$conf = include app_path('config/app.php');
	foreach ($conf['Alias'] as $alias => $class) {
		class_alias($class,$alias);
	}

	foreach ($conf['Service'] as $key ) {
		App::make($key,[$app])->register();
	}
	 foreach ($conf['Bind'] as $name => $class) {
	 	$app->bind($name,$class);
	 }
	$app['router']->group(['namespace'=>'App\Http\Controllers'],function () use ($app)
	{
		require app_path('Http/routes.php');
	});
	
	$app->instance('request',$request);
	$response = $app['router']->dispatch($request);
	$response->send();
	$app['session']->save();