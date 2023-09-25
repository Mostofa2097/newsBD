<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function Photos(){
       $photo = DB::table('photos')->get();
       return view('backend.gallery.photo',compact('photo'));
    }

    public function storePhoto(Request $request)
    {



        $validated = $request->validate([
            'title' => 'required',
            'type' => 'required',

        ]);

        $data = array();

        $data['title'] = $request->title;
        $data['type'] = $request->type;
        
        $data['photo'] = $request->photo;

        /* single image upload */
        $image = $request->file('photo');
        if ($image) {
            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'postimages/';
            $document_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $data['photo'] = $document_url;
            }
        }
        DB::table('photos')->insert($data);
        return redirect()->back();
    }
    
    public function videos(){
        $video = DB::table('videos')->get();
        return view('backend.gallery.video',compact('video'));
     }
     

     public function storeVideo(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required',
            'type' => 'required',

        ]);

        $data = array();

        $data['title'] = $request->title;
        $data['embed_code'] = $request->embed_code;
        $data['type'] = $request->type;
        

        DB::table('videos')->insert($data);
        return redirect()->back();
    }


}
