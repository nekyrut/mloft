<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class SiteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->CategoryMenu();
    }

    // 
    public function CategoryMenu()
    {
        View::composer('components.sitebar.nav', function($view){
            $view->with('categories', Category::whereNull('category_id')->with('childrenCategories')->get());
        });
    }

}
