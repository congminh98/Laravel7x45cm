<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('layouts.pages.auth.login');
    }
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        try {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return redirect()->intended(route('home'))->with('success', 'Đăng nhập thành công');
            }
            return redirect()->back()->withInput()->with(
                'errorForm',
                'Thông tin đăng nhập không chính xác, vui lòng thử lại !',
            );
        } catch (\Exception $e) {
            return redirect()->back()->with('errorForm', __($e->getMessage()));
        }
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        try {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect(route('home'))->with(
                'success',
                'Đăng xuất thành công.',
            );
        } catch (\Exception $e) {
            return redirect()->back()->with('errorForm', __($e->getMessage()));
        }
    }
}
