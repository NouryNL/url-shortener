<?php

namespace App\Listeners;

use App\Events\LinkOpened;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Link;

class CollectStats
{

    public function handle(LinkOpened $event)
    {
        die()
    }

    public function subscribe(Dispatcher $events)
    {
        $events->listen(
            'App\Events\LinkOpened',
    }
}
