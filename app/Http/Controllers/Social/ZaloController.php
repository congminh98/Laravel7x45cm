<?php

namespace App\Http\Controllers\Social;

use App\Http\Controllers\Controller;
use App\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Zalo\Zalo;

class ZaloController extends Controller
{
    public function zalo()
    {
        $config = Config::get('services.zalo');
        $zalo = new Zalo($config);
        $helper = $zalo->getRedirectLoginHelper();
        $callbackUrl = $config['callback_url'];
        $loginUrl = $helper->getLoginUrl($callbackUrl);
        return redirect()->intended($loginUrl);
    }
    public function zaloCallback(Request $request)
    {
        try {
            if ($request->code) {
                $client = new Client();
                $config = Config::get('services.zalo');
                $code = $request->code;
                $request_url = 'https://oauth.zaloapp.com/v3/access_token?app_id=' . $config['app_id'] . '&app_secret=' . $config['app_secret'] . '&code=' . $code;
                $response_access = $client->request('GET', $request_url);
                $response_access = (string) $response_access->getBody();
                $dataResponse = json_decode((string) $response_access, true);
                if ($dataResponse && !empty($dataResponse)) {
                    $access_token = $dataResponse['access_token'];
                    $profile = $client->request('GET', 'https://graph.zalo.me/v2.0/me?access_token=' . $access_token . '&fields=id,birthday,name,gender,picture,email');
                    $profile = (string) $profile->getBody();
                    $responseProfile = json_decode((string) $profile, true);
                    $finduser = User::where('social_id', $responseProfile['id'])->first();
                    if (isset($finduser) && $finduser != null) {
                        Auth::login($finduser);
                        return redirect()->intended(route('home'))->with('success', 'Đăng nhập thành công');
                    } else {
                        $newUser = User::create([
                            'social_id' => $responseProfile['id'] ?? '',
                            'name' => $responseProfile['name'] ?? '',
                            'email' => $responseProfile['email'] ?? '',
                            'provider' => 'zalo',
                            'profile_photo_path' => $responseProfile['picture']['data']['url'] ?? '',
                            'password' => encrypt('abc@1234')
                        ]);
                        Auth::login($newUser);
                        return redirect()->intended(route('home'))->with('success', 'Đăng nhập thành công');
                    }
                }
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
