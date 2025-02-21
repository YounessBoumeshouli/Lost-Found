<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Userchats extends Model
{
    protected $table = 'userchats';
    protected $fillable = [""];
    public function chat(){
        return $this->belongsTo(Chats::class,"chat_id");
    }
    //
}
