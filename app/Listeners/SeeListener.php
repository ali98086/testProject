<?php

namespace App\Listeners;

use App\Events\SeeEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SeeListener
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
    public function handle(SeeEvent $event): void
    {
        Log::info('See Post '.$event->post.' in '.now());
    }
}
