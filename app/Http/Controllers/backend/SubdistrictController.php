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

}
