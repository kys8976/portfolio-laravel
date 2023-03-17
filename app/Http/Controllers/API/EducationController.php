<?php

namespace App\Http\Controllers\API;

use App\Models\Education;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function get_all_education(){

        $educations = Education::orderBy('id','DESC')->get();
        return response()->json([
            'educations' => $educations
        ],200);
    }


    public function create_education(Request $request){

        $this->validate($request,[
            'institution' => 'required'
        ]);

        $service = new Education();
        $service->institution = $request->institution;
        $service->period = $request->period;
        $service->degree = $request->degree;
        $service->department = $request->department;
        $service->save();
    }

    public function update_education(Request $request, $id){
        $service = Education::find($id);
        $this->validate($request,[
            'name' => 'institution'
        ]);
        $service->institution = $request->institution;
        $service->period = $request->period;
        $service->degree = $request->degree;
        $service->department = $request->department;
        $service->save();
    }

    public function delete_education(Request $request, $id){
        $service = Education::findOrFail($id);
        $service->delete();
    }
}
