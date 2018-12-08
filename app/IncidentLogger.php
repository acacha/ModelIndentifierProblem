<?php

namespace App;

/**
 * Class IncidentLogger.
 *
 * @package App\Listeners\Incidents
 */
class IncidentLogger
{
    /**
     * Stored.
     *
     * @param $event
     */
    public static function stored($event)
    {
        Log::create([
            'text' => 'Ha creat la incidència ' . $event->incident->subject,
        ]);
    }

}
