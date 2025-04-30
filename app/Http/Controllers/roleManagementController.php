<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class roleManagementController extends Controller
{
    public function create ()
    {
        return view('Dashboard.roleManage.create');
    }

    public function users ()
    {
        $users = User::count();
        return view('Dashboard.roleManage.index', compact('users'));
    }

    public function store ()
    {
        
    }
}
