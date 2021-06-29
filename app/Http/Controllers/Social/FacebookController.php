<?php

namespace App\Http\Controllers\Social;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    public function facebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            $isUser = User::where('social_id', $user->id)->first();
            if ($isUser) {
                Auth::login($isUser);
                return redirect()->intended(route('home'))->with('success', 'Đăng nhập thành công');
            } else {
                $createUser = User::create([
                    'social_id' => $user->id ?? '',
                    'name' => $user->name ?? '',
                    'email' => $user->email ?? '',
                    'provider' => 'facebook',
                    'profile_photo_path' => $user->avatar_original ?? '',
                    'password' => encrypt('abc@1234')
                ]);
                Auth::login($createUser);
                return redirect()->intended(route('home'))->with('success', 'Đăng nhập thành công');
            }
        } catch (Exception $exception) {
            dd($exception->getMessage());
            return redirect()->back()->with('errorForm', __($exception->getMessage()));
        }
    }
}
