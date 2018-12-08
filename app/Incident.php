<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    protected $guarded = [];

    /**
     * Get the user that owns the incident.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
