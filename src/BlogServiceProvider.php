<?php

namespace Sanjeevscet\Blog;

use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
		$this->publishes([
			__DIR__.'/views' => base_path('resources/views/sanjeevscet/blog'),
		]);
        $this->loadViewsFrom(__DIR__.'/views', 'blog');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes/web.php';
        $this->app->make('Sanjeevscet\Blog\BlogController');        
    }
}
