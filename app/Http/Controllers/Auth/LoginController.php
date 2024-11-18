<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\NhanVien;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); 
    }

    public function login(Request $request)
    {
        $request->validate([
            'MaNV' => 'required',
            'password' => 'required',
        ]);
    
        // Retrieve the user by MaNV
        $nhanVien = NhanVien::where('MaNV', $request->MaNV)->first();
    
        // Check if the user exists and the password matches
        if ($nhanVien && $nhanVien->password === $request->password) {
            // Log in the user manually
            Auth::login($nhanVien);
    
            return redirect()->intended('/dashboard');
        }
    
        return back()->withErrors([
            'MaNV' => 'Tên đăng nhập hoặc mật khẩu không đúng.',
        ])->withInput($request->except('password'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login'); // Redirect to login form after logout
    }
}
