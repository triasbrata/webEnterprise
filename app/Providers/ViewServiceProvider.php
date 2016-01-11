<?php namespace App\Providers;
use Illuminate\View\ViewServiceProvider as ServiceProvider;
use Illuminate\View\FileViewFinder;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\View\Engines\CompilerEngine;
class ViewServiceProvider extends ServiceProvider
{
	public function registerViewFinder()
    {
        $this->app->bind('view.finder', function ($app) {
            $paths = [realpath(base_path('resources/views'))];
            return new FileViewFinder($app['files'], $paths);
        });
    }
    /**
     * Register the Blade engine implementation.
     *
     * @param  \Illuminate\View\Engines\EngineResolver  $resolver
     * @return void
     */
    public function registerBladeEngine($resolver)
    {
        $app = $this->app;

        // The Compiler engine requires an instance of the CompilerInterface, which in
        // this case will be the Blade compiler, so we'll first create the compiler
        // instance to pass into the engine so it can compile the views properly.
        $app->singleton('blade.compiler', function ($app) {
            $cache = realpath(base_path('temp'));

            return new BladeCompiler($app['files'], $cache);
        });

        $resolver->register('blade', function () use ($app) {
            return new CompilerEngine($app['blade.compiler']);
        });
    }
}