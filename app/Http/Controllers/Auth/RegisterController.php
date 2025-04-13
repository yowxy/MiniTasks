<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
/*************  ✨ Windsurf Command ⭐  *************/
/**
 * Display the registration form view.
 *
 * @return \Illuminate\View\View
 */

/*******  489dc9f8-cff7-4805-9366-7a41172676fa  *******/
    public function index()
    {
        return view('auth.Register');
    }

    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();
        $user = User::create($validated); // cukup satu kali aja

        Auth::login($user);
        return redirect()->route('Dashboard')->withSuccess('Great! You have Successfully logged in');
    }

}
