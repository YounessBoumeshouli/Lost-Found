<?php

namespace App\Http\Controllers;
use App\Models\Lost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LostController extends Controller
{
    public function index(){
        $losts = Lost::all();
        return view('losts', ['losts' => $losts]);
    }
    public function show($id){
        $lost = Lost::find($id);
        $comments = $lost->comments;
        return view('post', ['lost' => $lost, 'comments' => $comments]);
    }

    public function create(Request $request){
        $item_name= $request->input('item_name');
        $item_description= $request->input('item_description');
        $category_id= $request->input('category_id');
        $status= $request->input('status');
        $item_photo= $request->input('photo');

        $user_id = Auth::user()->id;

        Lost::create(['item_name' => $item_name,'item_description' => $item_description ,'user_id'=>$user_id ,'category_id'=>$category_id ,'status'=>$status ,'item_photo'=>$item_photo ]);
        return redirect('/losts');
    }
    public function delete(string $id){
        $lost = Lost::find($id);
        $lost->delete();
    }
    public function update($id){
        $item  = Lost::find($id);
        $item->update(["is_found"=>true,"founded_at"=>time()]);
       return redirect()->back();
    }
}
