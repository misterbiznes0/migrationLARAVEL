<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Appointment;
use App\Models\QueueTicket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function create()
    {
        $services = Service::all();

        return view('appointments.create', compact('services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
            'appointment_time' => [
                'required',
                'date',
                'after:now',
                function ($attribute, $value, $fail) {
                    $hour = date('H', strtotime($value));

                    if ($hour < 9 || $hour >= 18) {
                        $fail('Запись доступна только с 09:00 до 18:00.');
                    }
                },
            ],
        ]);

        $appointment = Appointment::create([
            'user_id' => Auth::id(),
            'service_id' => $request->service_id,
            'appointment_time' => $request->appointment_time,
            'status' => 'pending',
        ]);

        $lastNumber = QueueTicket::max('queue_number') ?? 0;
        $newNumber = $lastNumber + 1;

        QueueTicket::create([
            'appointment_id' => $appointment->id,
            'queue_number' => $newNumber,
            'status' => 'waiting',
        ]);

        return redirect()->route('dashboard')
            ->with('success', 'Вы успешно записались. Ваш номер очереди: ' . $newNumber);
    }

    public function index()
    {
        $appointments = Appointment::with(['service', 'queueTicket'])
            ->where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('appointments.index', compact('appointments'));
    }

    public function cancel(Appointment $appointment)
    {
        if ($appointment->user_id !== Auth::id()) {
            abort(403);
        }

        $appointment->update(['status' => 'cancelled']);

        if ($appointment->queueTicket) {
            $appointment->queueTicket->update(['status' => 'cancelled']);
        }

        return back()->with('success', 'Запись отменена.');
    }

    public function ticket(Appointment $appointment)
    {
        if ($appointment->user_id !== Auth::id()) {
            abort(403);
        }

        $appointment->load(['service', 'queueTicket', 'user']);

        return view('appointments.ticket', compact('appointment'));
    }
}