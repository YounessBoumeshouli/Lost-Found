<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class chatController extends Controller
{
    public function show($id){
        $chat =   Chat::find($id);
       $chats =  $chat->userchats;
       return view('');
    }
}
