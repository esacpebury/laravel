<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table='article';
    //禁用时间戳
    public $timestamps=false;
    //模型关联操作 关联作者模型

    public function author(){
        return $this->hasOne('App\Home\Author','id','author_id');
    }
    public function comment(){
        return $this->hasMany('App\Home\Comment','article_id','id');
    }
    public function keyword(){
        return $this->belongsToMany('App\Home\Keyword','relation','article_id','key_id');
    }

}
