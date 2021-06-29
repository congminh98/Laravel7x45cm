<?php

namespace App\Http\Controllers\Social;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    // google
    public function google()
    {
        return Socialite::driver('google')->redirect();
    }
    public function googleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('social_id', $user->id)->first();
            if (isset($finduser) && $finduser != null) {
                Auth::login($finduser);
                return redirect()->intended(route('home'))->with('success', 'Đăng nhập thành công');
            } else {
                $newUser = User::create([
                    'social_id' => $user->id ?? '',
                    'name' => $user->name ?? '',
                    'email' => $user->email ?? '',
                    'provider' => 'google',
                    'profile_photo_path' => $user->avatar_original ?? '',
                    'password' => encrypt('abc@1234')
                ]);
                Auth::login($newUser);
                return redirect()->intended(route('home'))->with('success', 'Đăng nhập thành công');
            }
        } catch (Exception $e) {
            dd($e);
            return redirect()->back()->with('errorForm', __($e->getMessage()));
        }
    }
}
