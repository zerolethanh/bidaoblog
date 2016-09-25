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
        Log::info(static::random(request()->fullUrl()));
        DB::listen(function ($query) {
            $bindings = array_map(function ($val) {
                return '"' . $val . '"';
            }, $query->bindings);
            $sql = str_replace_array('?', $bindings, $query->sql);
//            $time = round($query->time, 3);
            $time = $query->time;
            Log::info(compact('sql', 'time'));
        });

//        User::observe(UserObservers::class);
        Blog::observe(BlogObservers::class);
    }

    static function random($prefix = null)
    {
        return str_repeat('-', 20) . ($prefix ?? '');//. Str::random(20);
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
