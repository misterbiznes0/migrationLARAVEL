<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private function adminOnly()
    {
        // Проверка временно отключена
        return;
    }

    public function index()
    {
        $this->adminOnly();

        $users = User::latest()->get();

        return view('admin.users.index', compact('users'));
    }

    public function edit(User $user)
    {
        $this->adminOnly();

        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $this->adminOnly();

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'nullable|min:6',
        ]);

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->is_admin = $request->has('is_admin');

        if (!empty($data['password'])) {
            $user->password = Hash::make($data['password']);
        }

        $user->save();

        return redirect()->route('admin.users.index')
            ->with('success', 'Пользователь обновлён.');
    }

    public function destroy(User $user)
    {
        $this->adminOnly();

        if ($user->id === Auth::id()) {
            return back()->with('error', 'Нельзя удалить самого себя.');
        }

        $user->delete();

        return back()->with('success', 'Пользователь удалён.');
    }
}