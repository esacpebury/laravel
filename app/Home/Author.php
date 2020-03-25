<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    protected $table='author';
    //禁用时间戳
    public $timestamps=false;
}
