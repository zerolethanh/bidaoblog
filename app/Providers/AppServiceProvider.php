<?php

namespace App\Providers;

use App\Blog;
use App\Observers\BlogObservers;
use App\Observers\UserObservers;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Log::info(static::random("DB::listen - " . __CLASS__));
        DB::listen(function ($query) {
            $bindings = array_map(function ($val) {
                return '"' . $val . '"';
            }, $query->bindings);
            $query = str_replace_array('?', $bindings, $query->sql);
            Log::info($query);
        });

//        User::observe(UserObservers::class);
        Blog::observe(BlogObservers::class);
    }

    static function random($prefix)
    {
        return $prefix . str_repeat('-', 20) . Str::random(20);
    }


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
