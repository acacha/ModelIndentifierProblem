<?php

namespace App\Listeners;

use App\Mail\IncidentCreated;
use Mail;

/**
 * Class SendIncidentCreatedEmail.
 *
 * @package App\Listeners\Incidents
 */
class SendIncidentCreatedEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        Mail::to($event->incident->user)
            ->cc('maninfo@iesebre.com')
            ->queue((new IncidentCreated($event->incident))->onQueue('iesebre'));
    }
}
