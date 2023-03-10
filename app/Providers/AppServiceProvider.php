<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use \Illuminate\Pagination\Paginator;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        try{
            $categories = Category::all();
            View::share('categories', $categories);
        } catch (\Throwable $th){
            dump("ALERT: Recuerda lanzar las migratios cuando acabes el clone");
        }
        Paginator::useBootstrapFive();
    }
}
