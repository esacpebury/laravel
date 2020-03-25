<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    //
    protected $table='keyword';
    //禁用时间戳
    public $timestamps=false;
}
