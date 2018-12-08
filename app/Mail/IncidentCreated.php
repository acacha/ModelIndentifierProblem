<?php

namespace App\Mail;

use App\Incident;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\SerializesModels;

/**
 * Class IncidentCreated.
 *
 * @package App\Mail
 */
class IncidentCreated extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $incident;

    /**
     * IncidentCreated constructor.
     * @param $incident
     */
    public function __construct(Incident $incident)
    {
        $this->incident = $incident;
    }

    /**
     * Get subject.
     * @return string
     */
    protected function getSubject()
    {
        return 'Nova incidència (' . $this->incident->id . '): ' . $this->incident->subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.incidents.created')->subject($this->getSubject());
    }
}
