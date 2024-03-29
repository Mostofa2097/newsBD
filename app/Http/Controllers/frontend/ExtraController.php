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
            ->join('users', 'posts.user_id', 'users.id')
            ->select('posts.*', 'categories.category_bn','users.name','categories.category_en', 'subcategories.subcategory_bn','subcategories.subcategory_en')
            ->where('posts.id',$id)
            ->first();
        return view('frontend.singlepost ', compact('post'));

    }
    public function AllPost($id,$subcategory_bn){
        $posts = DB::table('posts')->where('subcat_id',$id)->orderBy('id',"DESC")->paginate(2);
        return view('frontend.allposts',compact('posts'));
        
    }
}
