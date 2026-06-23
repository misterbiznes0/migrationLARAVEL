<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Appointment;

class QueueTicket extends Model
{
    protected $fillable = [
        'appointment_id',
        'queue_number',
        'status',
    ];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
}