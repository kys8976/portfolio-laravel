<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class UserContorller extends Controller
{
    public function get_all_user(){

        $users = User::all();

        return response()->json([
            'users' => $users
        ],200);
    }

    public function create_user(Request $request){

        $this->validate($request,[
            'name' => 'required|min:2|max:20',
            'email' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = $request->type;
        $user->bio = $request->bio;
        $user->password = Hash::make($request->password);

        if($request->photo){
            $strpos = strpos($request->photo,';');
            $sub = strstr($request->photo,0,$strpos);
            $ex = explode('/',$sub)[1];
            $ex2 = explode(';',$ex);
            $name = time().".".$ex2[0];
            $img = Image::make($request->photo)->resize(700,500);
            $upload_path = public_path()."/img/upload/";
            $image = $upload_path.$user->photo;
            $img->save($upload_path.$name);
            if(file_exists($image)){
                @unlink($image);
            }
        }else{
            $name = 'avatar.jpeg';
        }
        $user->photo = $name;
        $user->save();
    }

    public function update_user(Request $request, $id){
        $user = User::find($id);
        $this->validate($request,[
            'name' => 'required'
        ]);
        $user->name = $request->name;
        $user->icon = $request->icon;
        $user->description = $request->description;
        $user->save();
    }

    public function delete_user(Request $request, $id){
        $user = User::findOrFail($id);
        $user->delete();
    }
}
