<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\AdminLoginRequest;

class AdminSessionsController extends Controller
{
    public function loginForm()
    {
        return view('admin.auth.login');
    }

    public function store(AdminLoginRequest $request) // Use the custom form request here
    {
        if (Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ], $request->get('remember'))) {
            return redirect()->route('dashboard')->with('success', 'Welcome Admin!!');
        }

        return back()->withErrors(['email' => 'Invalid admin credentials.']);
    }

    public function destroy(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return redirect()->route('home')->with('success', 'Goodbye Admin!!');
    }
}
