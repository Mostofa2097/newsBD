<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    
    public function SinglePost($id,$slug) {
        $post = DB::table('posts')
            ->join('categories', 'posts.cat_id', 'categories.id')
            ->join('subcategories', 'posts.subcat_id', 'subcategories.id')
            ->select('posts.*', 'categories.category_bn', 'subcategories.subcategory_bn')
            ->where('posts.id',$id)
            ->first();
        return view('frontend.singlepost ', compact('post'));

    }
}
