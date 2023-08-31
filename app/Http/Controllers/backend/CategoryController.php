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
}
