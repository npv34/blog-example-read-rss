<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories = [
            1 => [
                "id" => 1,
                "name" => "Email Marketing",
                "slug" => "email-marketing",
                "url" => "https://blog.aweber.com/email-marketing/feed"
            ],
            2 => [
                "id" => 2,
                "name" => "Articles Tips",
                "slug" => "articles-tips",
                "url" => "https://blog.aweber.com/category/articles-tips/feed"
            ],
        ];
        View::share('categories', $categories);

    }
}
