<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;use PHPUnit\Util\PHP\Job;

class userController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users', ['users' => $users]);
    }
    public function create(Request $request){


    }
    public function delete(string $id){

      $user = User::find($id);
      $user->delete();


    }
    public function update(string $id)
    {

        $user = User::find($id);
        return view('userform', ['user' => $user]);

    }
    public function modify(Request $request, string $id){

    $user  = User::find($id);

    $user->update($request->all());

    return view('user', ['user' => $user]);

    }
}
