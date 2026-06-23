<?php

namespace App\Http\Controllers;

use App\Models\QueueTicket;

class QueueBoardController extends Controller
{
    public function index()
    {
        $called = QueueTicket::with(['appointment.service'])
            ->where('status', 'called')
            ->latest()
            ->first();

        $waiting = QueueTicket::with(['appointment.service'])
            ->where('status', 'waiting')
            ->orderBy('queue_number')
            ->take(5)
            ->get();

        return view('queue-board', compact('called', 'waiting'));
    }
}