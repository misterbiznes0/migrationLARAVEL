<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::attempt($data)) {
            return back()->withErrors([
                'email' => 'Неверная почта или пароль.',
            ]);
        }

        if (!Auth::user()->is_admin) {
            Auth::logout();

            return back()->withErrors([
                'email' => 'У вас нет прав администратора.',
            ]);
        }

        session(['admin_logged_in' => true]);

        return redirect()->route('admin.queue.index');
    }

    public function logout()
    {
        session()->forget('admin_logged_in');

        return redirect()->route('admin.login');
    }
}