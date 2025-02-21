<?php

namespace App\Http\Controllers;

use App\Models\comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class commentController extends Controller
{

    public function create(Request $request,$id){
        $comment = $request->input('comment');
        $id_user = Auth::user()->id;
        comments::create(["comment" => $comment, "user_id" => $id_user,"item_id" => $id]);
        return redirect('/losts');
    }

}
