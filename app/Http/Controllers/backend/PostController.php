<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

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
        $data=array();
        					
        					
        $data['title_bn']=$request->title_bn;
        $data['title_en']=$request->title_en;
        $data['user_id']=Auth::id();
        $data['cat_id']=$request->cat_id;
        $data['subcat_id']=$request->subcat_id;
        $data['dist_id']=$request->dist_id;
        $data['subdist_id']=$request->subdist_id;
        $data['details_bn']=$request->details_bn;
        $data['details_en']=$request->details_en;
        $data['tag_bn']=$request->tag_bn;
        $data['tag_en']=$request->tag_en;
        $data['headline']=$request->headline;
        $data['first_section']=$request->first_section;
        $data['first_section_thumbnail']=$request->first_section_thumbnail;
        $data['bigthumbnail']=$request->bigthumbnail;
        $data['post_date']=date('d-m-Y');
        $data['post_month']=date("F");
        $data['image']=$request->image;

        // $image=$request->image;
        // if($image){
        //     $image_one= uniqid().'.'.$image->getClientOriginalExtension();
        //     Image::make($image)->resize(500,340)->save('public/postimages/'.$image_one);
        //     $data['image'] = 'public/postimages/'.$image_one;
        //     DB::table('posts')->insert($data);
        //     return redirect()->back();
        // }
        // else{
        //     return redirect()->back(); 
        // } 
        DB::table('posts')->insert($data);
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
