<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    protected $table = 'comments';
    protected $fillable = ['comment','user_id','item_id'];
    public function lost(){
        return $this->belongsTo(Lost::class, 'item_id');
    }
}
