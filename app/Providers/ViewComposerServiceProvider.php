<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App;

use App\Models\Categories;
use App\Models\Services;

class ViewComposerServiceProvider extends ServiceProvider
{

    public function boot()
    {

        $this->registercategories();
        $this->registerheader();
    }

    public function register()
    {
        //
    }

    public function registerheader()
    {
        view()->composer(['front.layouts.footer', 'front.layouts.header', 'front.services.service'], function($view)
        {
            $servicesRepo = App::make(Services::class);

            $services = $servicesRepo->getAllActive();

            $view->with([
                'services'=> $services,
            ]);

        });
    }

    public function registercategories()
    {
        view()->composer('front.categories.complements.categorieslist', function($view)
        {
            $categoriesRepo = App::make(Categories::class);

            $parentcategories = $categoriesRepo->parents();
            $categorieslist = $categoriesRepo->childs();

            $view->with([
                'parentcategories'=> $parentcategories,
                'categorieslist'=> $categorieslist,
            ]);

        });
    }

}