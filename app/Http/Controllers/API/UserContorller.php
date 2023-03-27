<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
            'name' => 'required'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->icon = $request->icon;
        $user->description = $request->description;
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
