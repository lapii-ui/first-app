<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Auth;

class LanguageController extends Controller
{

    public function SwitchLanguage($locale = 'en')
    {
        session()->put('locale', $locale);
        return back();
    }

}
