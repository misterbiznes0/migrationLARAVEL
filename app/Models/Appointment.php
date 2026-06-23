<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\QueueTicket;
use App\Models\User;
use App\Models\Service;

class Appointment extends Model
{
    protected $fillable = [
        'user_id',
        'service_id',
        'appointment_time',
        'status',
    ];

    public function queueTicket()
    {
        return $this->hasOne(QueueTicket::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}