<?php

namespace App\Http\Controllers\API;

use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
    public function get_all_project(){

        $projects = Project::orderBy('id','DESC')->get();
        return response()->json([
            'projects' => $projects
        ],200);
    }

    public function get_edit_project($id){
        $project = Project::find($id);
        return response()->json([
            'project' => $project
        ],200);
    }

    public function add_project(Request $request){

        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
        ]);
        $project = new Project();
        $project->title = $request->title;
        $project->description = $request->description;
        $project->link = $request->link;

        if($request->photo){
            $strpos = strpos($request->photo,';');
            $sub = strstr($request->photo,0,$strpos);
            $ex = explode('/',$sub)[1];
            $ex2 = explode(';',$ex);
            $name = time().".".$ex2[0];
            $img = Image::make($request->photo)->resize(700,500);
            $upload_path = public_path()."/img/upload/";
            $image = $upload_path.$project->photo;
            $img->save($upload_path.$name);
            if(file_exists($image)){
                @unlink($image);
            }
        }else{
            $name = $project->photo;
        }
        $project->photo = $name;
        $project->save();
    }

    public function update_project(Request $request, $id){
        $project = Project::find($id);
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
        ]);
        $project->title = $request->title;
        $project->description = $request->description;
        $project->link = $request->link;

        if($project->photo != $request->photo){
            $strpos = strpos($request->photo,';');
            $sub = strstr($request->photo,0,$strpos);
            $ex = explode('/',$sub)[1];
            $ex2 = explode(';',$ex);
            $name = time().".".$ex2[0];
            $img = Image::make($request->photo)->resize(700,500);
            $upload_path = public_path()."/img/upload/";
            $image = $upload_path.$project->photo;
            $img->save($upload_path.$name);
            if(file_exists($image)){
                @unlink($image);
            }
        }else{
            $name = $project->photo;
        }
        $project->photo = $name;
        $project->save();
    }

    public function delete_project(Request $request, $id){
        $project = Project::findOrFail($id);
        $image_path = public_path()."img/upload/";
        $image = $image_path.$project->photo;
        if(file_exists($image)){
            @unlink($image);
        }
        $project->delete();
    }

}
