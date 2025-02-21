<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chats extends Model
{
 protected $table = 'chats';
 protected $fillable = ["id","user_id","message",];

    public function userchats(){
        return $this->hasMany(Userchats::class,"chat_id");
    }
}
