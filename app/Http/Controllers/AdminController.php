<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    $admin = Admin::where('username', $request->username)->first();

    if (!$admin || !Hash::check($request->password, $admin->password)) {
        return back()->withErrors(['login' => 'Username or password incorrect']);
    }

    session(['is_admin_logged_in' => true, 'admin_id' => $admin->id]);
    return redirect()->route('admin');
    }


    public function logout()
    {
        session()->forget('is_admin_logged_in');
        return redirect()->route('home');
    }
}
