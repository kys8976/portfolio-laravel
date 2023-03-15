<?php

namespace App\Http\Controllers\API;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function get_all_post(){

        $posts = Post::orderBy('id','DESC')->get();

        return response()->json([
            'posts' => $posts
        ],200);
    }

    public function create_post(Request $request){

        $this->validate($request,[
            'name' => 'required'
        ]);

        $post = new Post();
        $post->name = $request->name;
        $post->type = $request->type;
        $post->save();
    }

    public function update_post(Request $request, $id){
        $post = Post::find($id);
        $this->validate($request,[
            'name' => 'required'
        ]);
        $post->name = $request->name;
        $post->type = $request->type;
        $post->save();
    }

    public function delete_post(Request $request, $id){
        $post = Post::findOrFail($id);
        $post->delete();
    }
}
