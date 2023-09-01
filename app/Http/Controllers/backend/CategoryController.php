<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    function index(){
        $category = DB::table('categories')->get();
        return view('backend.category.index',compact('category'));
    }
    function store(Request $request){
        $validated = $request->validate([
            'category_bn' => 'required|unique:categories|max:55',
            'category_en' => 'required|unique:categories|max:55',
            
        ]);
        $date=array();
        $date['category_bn']=$request->category_bn;
        $date['category_en']=$request->category_en;
        DB::table('categories')->insert($date);

        return redirect()->back();

    }
}
