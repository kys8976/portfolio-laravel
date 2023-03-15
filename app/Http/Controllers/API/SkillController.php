<?php

namespace App\Http\Controllers\API;

use App\Models\Skill;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function get_all_skill(){

        $skills = Skill::with('service')->orderBy('id','DESC')->get();
        return response()->json([
            'skills' => $skills
        ],200);
    }


    public function create_skill(Request $request){

        $this->validate($request,[
            'name' => 'required'
        ]);

        $service = new Skill();
        $service->name = $request->name;
        $service->proficiency = $request->proficiency;
        $service->service_id = $request->service_id;
        $service->save();
    }

    public function update_skill(Request $request, $id){
        $service = Skill::find($id);
        $this->validate($request,[
            'name' => 'required'
        ]);
        $service->name = $request->name;
        $service->proficiency = $request->proficiency;
        $service->service_id = $request->service_id;
        $service->save();
    }

    public function delete_skill(Request $request, $id){
        $service = Skill::findOrFail($id);
        $service->delete();
    }
}
