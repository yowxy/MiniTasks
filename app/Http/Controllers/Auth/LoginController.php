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
                    return redirect()->intended('/');
                case 'Manager':
                // return redirect()->route('manager.dashboard');
                    break;
                case 'Staff':
                // return redirect()->route('staff.dashboard');
                    break;
                default:
                  return redirect()->route('Login');
            }


        }

    // Kalau login gagal, redirect balik dengan pesan error
    return redirect()->back()->withInput()->withErrors([
        'email' => 'Email atau password salah.',
    ]);
}


    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('Home');
    }

}
