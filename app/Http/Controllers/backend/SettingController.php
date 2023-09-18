<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $social = DB::table('socials')->first();
        return view('backend.setting.social', compact('social'));
    }


    public function updateSocial(Request $request, $id)
    {

        $date = array();
        $date['facebook'] = $request->facebook;
        $date['twitter'] = $request->twitter;
        $date['linkedin'] = $request->linkedin;
        $date['youtube'] = $request->youtube;


        DB::table('socials')->where('id', $id)->update($date);

        return redirect()->back();
    }


    public function SeoSetting()
    {
        $seo = DB::table('seos')->first();
        return view('backend.setting.seo', compact('seo'));
    }
    

    public function updateSeo(Request $request, $id)
    {
        $date = array();
        $date['meta_author'] = $request->meta_author;
        $date['meta_title'] = $request->meta_title;
        $date['meta_keyword'] = $request->meta_keyword;
        $date['meta_description'] = $request->meta_description;
        $date['google_analytics'] = $request->google_analytics;
        $date['google_verification'] = $request->google_verification;
        $date['alexa_analytics'] = $request->alexa_analytics;

     DB::table('seos')->where('id', $id)->update($date);

        return redirect()->back();
    }







}
