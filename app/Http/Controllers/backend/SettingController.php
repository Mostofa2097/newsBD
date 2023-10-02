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

    public function namazSetting()
    {
        $namaz = DB::table('namaz')->first();
        return view('backend.setting.namaz', compact('namaz'));
    }

    public function updateNamaz(Request $request, $id)
    {
        $date = array();
        $date['fajar'] = $request->fajar;
        $date['johor'] = $request->johor;
        $date['ashor'] = $request->ashor;
        $date['magrib'] = $request->magrib;
        $date['esha'] = $request->esha;
        $date['jummah'] = $request->jummah;

     DB::table('namaz')->where('id', $id)->update($date);

        return redirect()->back();
    }

    public function livetvSetting()
    {
        $livetv = DB::table('livetv')->first();
        return view('backend.setting.livetv', compact('livetv'));
    }

    public function updateLivetv(Request $request, $id)
    {
        $date = array();
        $date['embed_code'] = $request->embed_code;
        DB::table('livetv')->where('id', $id)->update($date);
        return redirect()->back();
    }

    public function activeLivetv($id)
    {
        
        DB::table('livetv')->where('id', $id)->update(['status'=>1]);
        return redirect()->back();
    }

    public function deactiveLivetv($id)
    {
        
        DB::table('livetv')->where('id', $id)->update(['status'=>0]);
        return redirect()->back();
    }

    public function noticeSetting()
    {
        $notice = DB::table('notices')->first();
        return view('backend.setting.notice', compact('notice'));
    }

    public function updateNotice(Request $request, $id)
    {
        $date = array();
        $date['notice'] = $request->notice;
        DB::table('notices')->where('id', $id)->update($date);
        return redirect()->back();
    }

    public function activeNotice($id)
    {
        
        DB::table('notices')->where('id', $id)->update(['status'=>1]);
        return redirect()->back();
    }
    public function deactiveNotice($id)
    {
        
        DB::table('notices')->where('id', $id)->update(['status'=>0]);
        return redirect()->back();
    }
 
    public function importantWebsite()
    {
        $website = DB::table('websites')->get();
        return view('backend.setting.website', compact('website'));

    }

    public function storeWebsite(Request $request)
    {
        $date = array();
        $date['website_name'] = $request->website_name;
        $date['website_name_en'] = $request->website_name_en;
        $date['website_link'] = $request->website_link;
        
     DB::table('websites')->insert($date);

        return redirect()->back();
    }







}
