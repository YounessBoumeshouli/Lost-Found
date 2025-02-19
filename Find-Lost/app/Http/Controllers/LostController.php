<?php

namespace App\Http\Controllers;
use App\Models\Lost;
use Illuminate\Http\Request;

class LostController extends Controller
{
    public function index(){
        $job = Lost::all();
        return view('jobs', ['jobs' => $job]);
    }
    public function create(Request $request){
        dd($request);
//        $item_name= $request->input('item_name');
//        $item_description = $request->input('item_description');
//        Lost::create(['item_name' => $item_name, 'item_description' => $item_description]);
    }
    public function delete(string $id){
        $lost = Lost::find($id);
        $lost->delete();
    }
}
