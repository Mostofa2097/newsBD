<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubdistrictController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sub= DB::table('subdistricts')->join('districts','subdistricts.district_id','districts.id')->
        select('districts.district_en','districts.district_bn','subdistricts.*')->get(); 
        $district = DB::table('districts')->get();
        return view('backend.subdistrict.index',compact('sub','district'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'subdistrict_bn' => 'required|unique:subdistricts|max:55',
            'subdistrict_en' => 'required|unique:subdistricts|max:55',
            
        ]);
        $date=array();
        $date['subdistrict_bn']=$request->subdistrict_bn;
        $date['subdistrict_en']=$request->subdistrict_en;
        $date['district_id']=$request->district_id;
        DB::table('subdistricts')->insert($date);

        return redirect()->back();
    }

    public function destroy($id){
        DB::table("subdistricts")->where('id',$id)->delete();
        return redirect()->back();
    }

    function edit($id){
        $sub = DB::table('subdistricts')->where('id',$id)->first();
        $district = DB::table('districts')->get();
        return view('backend.subdistrict.edit',compact('sub','district'));
    }


    function update( Request $request,$id){
        $validated = $request->validate([
            'subdistrict_bn' => 'required',
            'subdistrict_en' => 'required',
            
        ]);

        $date=array();
        $date['subdistrict_bn']=$request->subdistrict_bn;
        $date['subdistrict_en']=$request->subdistrict_en;
        $date['district_id']=$request->district_id;
        DB::table('subdistricts')->where('id',$id)->update($date);

        return redirect()->route('index.subdistrict');

        
    }

}
