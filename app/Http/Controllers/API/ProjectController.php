<?php

namespace App\Http\Controllers\API;

use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function get_all_project(){

        $projects = Project::orderBy('id','DESC')->get();
        return response()->json([
            'projects' => $projects
        ],200);
    }

    public function create_project(Request $request){

        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
            'photo' => 'required'
        ]);
        $project = new Project();
        $project->title = $request->title;
        $project->description = $request->description;
        $project->link = $request->link;
        $project->photo = $request->photo;
        $project->save();
    }

    public function update_project(Request $request, $id){
        $project = Project::find($id);
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
            'photo' => 'required'
        ]);
        $project->title = $request->title;
        $project->description = $request->description;
        $project->link = $request->link;
        $project->photo = $request->photo;
        $project->save();
    }

    public function delete_project(Request $request, $id){
        $project = Project::findOrFail($id);
        $project->delete();
    }
}
