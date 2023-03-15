<?php

namespace App\Http\Controllers\API;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function get_all_post(Request $request){

        $posts = Post::with('board')->orderBy('id','DESC')->get();

        return response()->json([
            'posts' => $posts
        ],200);
    }

    public function create_post(Request $request){

        $this->validate($request,[
            'title' => 'required',
            'content' => 'required',
            'board_id' => 'required'
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->board_id = $request->board_id;
        $post->save();
    }

    public function update_post(Request $request, $id){
        $post = Post::find($id);
        $this->validate($request,[
            'title' => 'required',
            'content' => 'required',
            'board_id' => 'required'
        ]);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->board_id = $request->board_id;
        $post->save();
    }

    public function delete_post(Request $request, $id){
        $post = Post::findOrFail($id);
        $post->delete();
    }
}
