<?php

namespace App\Http\Controllers\Social;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index()
    {
        return view();
    }
    public function phoneRegister(Request $request)
    {
        try {
            dd($request->user);
            $dataUser = $request->user;
            $finduser = User::where('social_id', $dataUser->localId)->first();
            if (isset($finduser) && $finduser != null) {
                Auth::login($finduser);
                return redirect()->intended(route('home'))->with('success', 'Đăng nhập thành công');
            } else {
                $newUser = User::create([
                    'social_id' => $dataUser->localId ?? '',
                    'name' => '',
                    'email' => '',
                    'provider' => 'phone',
                    'password' => encrypt($request->code)
                ]);
                Auth::login($newUser);
                return redirect()->intended(route('home'))->with('success', 'Đăng nhập thành công');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
