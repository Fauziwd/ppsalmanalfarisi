<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validated = $request->validate([
            'role' => 'required|string|in:admin,ustadz,walisantri',
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Cek role dan lakukan login sesuai dengan role yang dipilih
        $role = $validated['role'];
        $email = $validated['email'];
        $password = $validated['password'];

        // Cek apakah pengguna terdaftar dengan role yang sesuai
        $user = User::where('email', $email)->where('role', $role)->first();

        if ($user && Auth::attempt(['email' => $email, 'password' => $password])) {
            // Arahkan ke dashboard sesuai role
            return redirect()->route($role . '.dashboard'); // Menyesuaikan dengan rute masing-masing role
        }

        // Jika login gagal
        return back()->withErrors(['email' => 'Login failed or invalid role']);
    }
}
