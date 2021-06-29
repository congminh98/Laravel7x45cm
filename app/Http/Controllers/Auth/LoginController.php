<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            // $user = User::where('email', '=', $request->email)->first();
            // if (!$user) {
            //     return redirect()->back()->withInput()->with(
            //         'errorForm',
            //         __('auth.account.email.not_exist'),
            //     );
            // } else {
            //     $checkPW = Hash::check($request->password, $user->password);
            //     if (!$checkPW) {
            //         return redirect()->back()->withInput()->with(
            //             'errorForm',
            //             'Mật khẩu không trùng khớp với tài khoản.',
            //         );
            //     }
            // }
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
                'toast_success',
                'Đăng xuất thành công.',
            );
        } catch (\Exception $e) {
            return redirect()->back()->with('errorForm', __($e->getMessage()));
        }
    }
}
