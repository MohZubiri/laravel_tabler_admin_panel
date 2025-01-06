<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
class SettingController extends Controller
{
        public function changeLocale(Request $request)
        {

            $locale = $request->input('lang', 'en');

            Session::put('locale', $locale); // Default to 'en'

            return redirect()->back();
        }
}
