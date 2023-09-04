<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DistrictController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        $district = DB::table('districts')->get();
        return view('backend.district.index',compact('district'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'district_bn' => 'required|unique:districts|max:55',
            'district_en' => 'required|unique:districts|max:55',
            
        ]);
        $date=array();
        $date['district_bn']=$request->district_bn;
        $date['district_en']=$request->district_en;
       
        DB::table('districts')->insert($date);

        return redirect()->back();
    }

    public function destroy($id){
        DB::table("districts")->where('id',$id)->delete();
        return redirect()->back();
    }

    function edit($id){
        $district = DB::table('districts')->where('id',$id)->first();
        return view('backend.district.edit',compact('district'));
    }

    function update( Request $request,$id){
        $validated = $request->validate([
            'district_bn' => 'required|unique:districts|max:55',
            'district_en' => 'required|unique:districts|max:55',
            
        ]);

        $date=array();
        $date['district_bn']=$request->district_bn;
        $date['district_en']=$request->district_en;
        
        DB::table('districts')->where('id',$id)->update($date);

        return redirect()->route('index.district');

        
    }

}
