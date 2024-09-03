<?php

namespace App\Listeners;

use App\Events\SeePostsEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SeePostsListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SeePostsEvent $event): void
    {
        Log::warning('Visited posts in '.now());
    }
}
