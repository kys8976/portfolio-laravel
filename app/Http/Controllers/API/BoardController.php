<?php

namespace App\Http\Controllers\API;

use App\Models\Board;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function get_all_board(){

        $services = Board::orderBy('id','DESC')->get();

        return response()->json([
            'services' => $services
        ],200);
    }

    public function create_board(Request $request){

        $this->validate($request,[
            'name' => 'required'
        ]);

        $service = new Board();
        $service->name = $request->name;
        $service->type = $request->type;
        $service->save();
    }

    public function update_board(Request $request, $id){
        $service = Board::find($id);
        $this->validate($request,[
            'name' => 'required'
        ]);
        $service->name = $request->name;
        $service->type = $request->type;
        $service->save();
    }

    public function delete_board(Request $request, $id){
        $service = Board::findOrFail($id);
        $service->delete();
    }
}
