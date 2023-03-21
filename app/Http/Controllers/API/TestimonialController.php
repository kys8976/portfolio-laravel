<?php

namespace App\Http\Controllers\API;

use App\Models\Testimonial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TestimonialController extends Controller
{
    public function get_all_testimonials(){

        $testimonials = Testimonial::orderBy('id','DESC')->get();
        return response()->json([
            'testimonials' => $testimonials
        ],200);
    }

    public function get_edit_testimonial($id){
        $testimonial = Testimonial::find($id);
        return response()->json([
            'testimonial' => $testimonial
        ],200);
    }

    public function add_testimonial(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'function' => 'required',
            'testimony' => 'required',
        ]);
        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->function = $request->function;
        $testimonial->testimony = $request->testimony;
        $testimonial->rating = $request->rating;

        if($request->photo){
            $strpos = strpos($request->photo,';');
            $sub = strstr($request->photo,0,$strpos);
            $ex = explode('/',$sub)[1];
            $ex2 = explode(';',$ex);
            $name = time().".".$ex2[0];
            $img = Image::make($request->photo)->resize(700,500);
            $upload_path = public_path()."/img/upload/";
            $image = $upload_path.$testimonial->photo;
            $img->save($upload_path.$name);
            if(file_exists($image)){
                @unlink($image);
            }
        }else{
            $name = $testimonial->photo;
        }
        $testimonial->photo = $name;
        $testimonial->save();
    }

    public function update_testimonial(Request $request, $id){
        $testimonial = Testimonial::find($id);
        $this->validate($request,[
            'name' => 'required',
            'function' => 'required',
            'testimony' => 'required',
        ]);
        $testimonial->name = $request->name;
        $testimonial->function = $request->function;
        $testimonial->testimony = $request->testimony;
        $testimonial->rating = $request->rating;

        if($testimonial->photo != $request->photo){
            $strpos = strpos($request->photo,';');
            $sub = strstr($request->photo,0,$strpos);
            $ex = explode('/',$sub)[1];
            $ex2 = explode(';',$ex);
            $name = time().".".$ex2[0];
            $img = Image::make($request->photo)->resize(700,500);
            $upload_path = public_path()."/img/upload/";
            $image = $upload_path.$testimonial->photo;
            $img->save($upload_path.$name);
            if(file_exists($image)){
                @unlink($image);
            }
        }else{
            $name = $testimonial->photo;
        }
        $testimonial->photo = $name;
        $testimonial->save();
    }

    public function delete_testimonials(Request $request, $id){
        $testimonials = Testimonial::findOrFail($id);
        $image_path = public_path()."img/upload/";
        $image = $image_path.$testimonials->photo;
        if(file_exists($image)){
            @unlink($image);
        }
        $testimonials->delete();
    }
}
