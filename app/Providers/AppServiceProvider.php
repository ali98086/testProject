<?php

namespace App\Providers;

use App\Events\SeeEvent;
use App\Events\SeePostsEvent;
use App\Listeners\SeeListener;
use App\Listeners\SeePostsListener;
use App\Models\Post;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        RateLimiter::for('confirm-request', function(Request $request){
           return !Auth::check() ? Limit::perMinute(3) : Limit::none();
        });
        Event::listen(SeePostsEvent::class ,SeePostsListener::class);
        // View::composer('show',function($view){
        //    $view->with('posts',Post::all());
        // });


    }
}
