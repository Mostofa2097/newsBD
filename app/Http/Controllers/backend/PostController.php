<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Image;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //all_posts
    public function index(){
        
    }
    //all_posts
    public function create(){
        $category = DB::table('categories')->get();
        $district = DB::table('districts')->get();
        return view('backend.post.create',compact('category','district'));
    }
    //all_posts
    public function store(Request $request){
        $validated = $request->validate([
            'cat_id' => 'required',
            'dist_id' => 'required',
            
        ]);
        $date=array();
        					
        					
        $date['title_bn']=$request->title_bn;
        $date['title_en']=$request->title_en;
        $date['user_id']=Auth::id();
        $date['cat_id']=$request->cat_id;
        $date['subcat_id']=$request->subcat_id;
        $date['dist_id']=$request->dist_id;
        $date['subdist_id']=$request->subdist_id;
        $date['details_bn']=$request->details_bn;
        $date['details_en']=$request->details_en;
        $date['tag_bn']=$request->tag_bn;
        $date['tag_en']=$request->tag_en;
        $date['headline']=$request->headline;
        $date['first_section']=$request->first_section;
        $date['first_section_thumbnail']=$request->first_section_thumbnail;
        $date['bigthumbnail']=$request->bigthumbnail;
        $date['post_date']=date('d-m-Y');
        $date['post_month']=date("F");
        $date['image']=$request->image;

        // $image=$request->image;
        // if($image){
        //     $image_one= uniqid().'.'.$image->getClientOriginalExtension();
        //     /Image::make($image_one)->resize(500,340)->save('public/postimages/'.$image_one);
        //     $data['image'] = 'public/postimages/'.$image_one;
        //     DB::table('posts')->insert($date);
        //     return redirect()->back();
        // }
        // else{
        //     return redirect()->back(); 
        // } 
        DB::table('posts')->insert($date);
            return redirect()->back();

    }


    //json data return
    public function GetSubcat($cat_id){
        $sub = DB::table('subcategories')->where('category_id',$cat_id)->get();
        return response()->json($sub);
    }
    public function GetSubdist($dist_id){
        $sub = DB::table('subdistricts')->where('district_id',$dist_id)->get();
        return response()->json($sub);
    }

}
