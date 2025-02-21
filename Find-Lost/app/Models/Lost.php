<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Lost extends Model {
    protected $table = 'losts';
    protected $fillable = ['item_name','item_description','category_id','item_photo','user_id','is_found','status','photo'];

    public function comments(){
        return $this->hasMany(comments::class, 'item_id');
    }

}
