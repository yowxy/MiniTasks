<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('auth.Login');
    }

   public function login(LoginRequest $request)
  {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        $user = Auth::user();

        switch ($user->roles) {
            case 'Administrator':
                return redirect()->route('Dashboard');
            case 'Manager':
                // return redirect()->route('admin.dashboard'); // Atau custom route kalau beda
            case 'Staff':
                // return redirect()->route('penyewa.index');
            default:
                Auth::logout(); // Logout kalau role gak dikenali
                return redirect()->route('Login')->withErrors([
                    'email' => 'Role tidak dikenali.',
                ]);
        }
    }

    // Kalau login gagal, redirect balik dengan pesan error
    return redirect()->back()->withInput()->withErrors([
        'email' => 'Email atau password salah.',
    ]);
}

}
