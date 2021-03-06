<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\Book\BookRepository', 'App\Repositories\Book\EloquentBookRepository' );

         $this->app->bind('App\Repositories\Category\CategoryRepository', 'App\Repositories\Category\EloquentCategoryRepository' );
    }
}
