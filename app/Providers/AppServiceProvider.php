<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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

        View::composer('*', function ($view) {
           $view->with([
               'categories' => Category::where('status', 1)->get(),
               'wishlists' => Wishlist::where('user_id', Auth::id())->get()
           ]);
        });
    }
}
