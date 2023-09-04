<?php

namespace App\Http\Controllers\backend;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sub = DB::table('subcategories')->join('categories','subcategories.category_id','categories.id')->select('categories.category_en','categories.category_bn','subcategories.*')->get();
        $category = DB::table('categories')->get();
        return view('backend.subcategory.index', compact('sub','category'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'subcategory_bn' => 'required|unique:subcategories|max:55',
            'subcategory_en' => 'required|unique:subcategories|max:55',
            
        ]);
        $date=array();
        $date['subcategory_bn']=$request->subcategory_bn;
        $date['subcategory_en']=$request->subcategory_en;
        $date['category_id']=$request->category_id;
        DB::table('subcategories')->insert($date);

        return redirect()->back();
    }

    public function destroy($id){
        DB::table("subcategories")->where('id',$id)->delete();
        return redirect()->back();
    }

    function edit($id){
        $sub = DB::table('subcategories')->where('id',$id)->first();
        $category = DB::table('categories')->get();
        return view('backend.subcategory.edit',compact('sub','category'));
    }

    function update( Request $request,$id){
        $validated = $request->validate([
            'subcategory_bn' => 'required|max:55',
            'subcategory_en' => 'required|max:55',
            
        ]);

        $date=array();
        $date['subcategory_bn']=$request->subcategory_bn;
        $date['subcategory_en']=$request->subcategory_en;
        $date['category_id']=$request->category_id;
        DB::table('subcategories')->where('id',$id)->update($date);

        return redirect()->route('index.subcategory');

        
    }
    
}
