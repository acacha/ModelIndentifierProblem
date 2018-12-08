<?php

namespace App\Listeners;

use App;
use App\Jobs\LogIncidentEvent;

/**
 * Class LogIncidentStored
 *
 * @package App\Listeners\Incidents
 */
class LogIncidentStored
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        if (App::environment('testing')) return;
        LogIncidentEvent::dispatch('stored',$event)->onQueue('prova');
    }
}
