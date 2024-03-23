<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.index', compact('users'));
    }

    public function assignRole(Request $request, $userId)
    {
        $user = User::findOrFail($userId);
        $user->role = $request->role;
        $user->save();
        return redirect()->back()->with('success', 'Role assigned successfully.');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function users()
    {
        // Logic to fetch users from the database
        $users = \App\Models\User::all();
        return view('admin.users', compact('users'));
    }
}
