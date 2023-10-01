<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ExtraController extends Controller
{
    public function english() {
        Session::get('lang');
        session()->forget('lang');
        Session::put('lang','english');
        return redirect()->back();

    }

    public function bangla() {
        Session::get('lang');
        session()->forget('lang');
        Session::put('lang','bangla');
        return redirect()->back();

    }
}
