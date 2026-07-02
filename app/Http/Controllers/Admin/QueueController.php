<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QueueTicket;
use Illuminate\Http\Request;

class QueueController extends Controller
{
    private function adminOnly()
    {
        if (!auth()->check()) {
            redirect()->route('login')->send();
            exit;
        }

        if (!auth()->user()->is_admin) {
            abort(403);
        }
    }

    public function index(Request $request)
    {
        $this->adminOnly();

        $status = $request->get('status', 'all');

        $query = QueueTicket::with(['appointment.user', 'appointment.service'])->latest();

        if ($status !== 'all') {
            $query->where('status', $status);
        }

        $tickets = $query->get();

        $stats = [
            'all' => QueueTicket::count(),
            'waiting' => QueueTicket::where('status', 'waiting')->count(),
            'called' => QueueTicket::where('status', 'called')->count(),
            'done' => QueueTicket::where('status', 'done')->count(),
            'cancelled' => QueueTicket::where('status', 'cancelled')->count(),
        ];

        return view('admin.queue.index', compact('tickets', 'stats', 'status'));
    }

    public function call(QueueTicket $ticket)
    {
        $this->adminOnly();

        $ticket->update(['status' => 'called']);

        if ($ticket->appointment) {
            $ticket->appointment->update(['status' => 'called']);
        }

        return back()->with('success', 'Посетитель вызван.');
    }

    public function complete(QueueTicket $ticket)
    {
        $this->adminOnly();

        $ticket->update(['status' => 'done']);

        if ($ticket->appointment) {
            $ticket->appointment->update(['status' => 'done']);
        }

        return back()->with('success', 'Приём завершён.');
    }

    public function destroy(QueueTicket $ticket)
    {
        $this->adminOnly();

        if ($ticket->appointment) {
            $ticket->appointment->delete();
        } else {
            $ticket->delete();
        }

        return back()->with('success', 'Запись удалена.');
    }
}