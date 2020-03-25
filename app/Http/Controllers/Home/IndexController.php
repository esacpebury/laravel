<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use DB;
class IndexController extends Controller
{
    //
    public function index(){
        echo '这是前台';
    }
    public  function index1(){
        echo input::get('id','1110').'<br/>';
        $all=Input::all();

       // dd(Input::get('name'));
    //dd(Input::only('id','name'));
   dd(Input::has(['gander']));
    }
    public function add(){
        //定义操作表
        //DB::table('member')->insert();
        $db=DB::table('member');
        $result=$db->insert([
            [
                'name'=>'滚wa滚滚',
                'age'=>'12',
                'email'=>'madongmei@.com'
            ],
               ['name'=>'滚滚w滚',
               'age'=>'12',
               'email'=>'madongmei@.com'
           ]
        ]);
        //c插入一条bukeyong1
//        $result=$db->insertgetid([
//            [
//                'name'=>'滚滚',
//                'age'=>'12',
//                'email'=>'madongmei@.com'
//            ]
//        ]);
        dd($result);

    }
    public  function  update(){
        $db=DB::table('member');
        $result=$db->where('id','=','1')->update([
           'name'=>'张三丰',
            'email'=>'zhanssan@.com'
        ]);
    dd($result);
    }
    public function select(){

        $db=DB::table('member');
        $data=$db->get();
       // dd($data);
        foreach ($data as $key=>$value){
            echo "id是：{$value->id},名字是：{$value->name},邮箱是：{$value->email}<br/>";
        }
       // $data=$db->where('id','>','3')->where('age','<','50')->get();
       // $data=DB::table('member')->where('id','=','1')->value('email');
       //$data=DB::table('member')->select('name','email')->get();
      // $data=DB::table('member')->orderBy('age','desc')->get();
        $data=DB::table('member')->where('id','1')->delete();
        dd($data);
    }

}
