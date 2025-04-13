<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            dd('Belum login');
        }
        // $users 
        $usersCount = User::count();
        $users = User::all();
        return view('Dashboard.Dashboard', compact('usersCount','users'));
    }

}