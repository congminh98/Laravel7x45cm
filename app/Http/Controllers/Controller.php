<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use RealRashid\SweetAlert\Facades\Alert;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (session('success')) {
                Alert::success(session('success'));
            }
            if (session('error')) {
                Alert::error(session('error'));
            }
            if (session('errorForm')) {
                $html = "<ul class='custom-message_alert' style='list-style: none;'>";
                if (is_array(session('errorForm'))) {
                    foreach (session('errorForm') as $error) {
                        $html .= "<li>$error[0]</li>";
                    }
                } else {
                    $ses = session('errorForm');
                    $html .= "<li>$ses</li>";
                }
                $html .= "</ul>";

                Alert::html('Đã có lỗi xẩy ra!', $html, 'error');
            }
            return $next($request);
        });
    }
}
