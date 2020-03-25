<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table='comment';
    //禁用时间戳
    public $timestamps=false;
    public function comment(){
        return $this->hasMany('App\Home\Comment','article_id','id');
    }
}
