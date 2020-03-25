<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;//命名空间三元素：常量 方法 类
use Input;
use DB;
use Illuminate\Support\Facades\Session;
use App\Home\Member;
//use mysql_xdevapi\Session;

class TestController extends Controller
{
    //
    public function test1()
    {
        echo phpinfo();
    }

    public function test2()
    {
        $data = date('Y-m-d H:i:s');
        $day = '日';
        $times = strtotime('+1 year');
        //  return view('home/test/test2',['data'=>$data,'day'=>$day]);
        return view('home/test/test2', compact('data', 'day', 'times'));
        //   $time=strtotime('+1 year')
        //  dd(compact('data','day','time'));
    }

    public function test4()
    {
        //查询数据
        $data = DB::table('member')->get();
        $day = date('N');
        return view('home.test.test4', compact('data', 'day'));

    }

    public function test5()
    {
        return view('home.test.test5');
    }

    public function test6()
    {
        return view('home.test.test6');
    }

    public function test7()
    {
        return '请求提交成功';
    }

    public function test8(Request $request)
    {
        //添加操作
        $model = new Member();
        //   $model->get();
//        $model->name='zhangsan';
//        $model->age='38';
//        $model->email='shis@qq.com';
//        $result=$model->save();
        $result = $model->create($request->all());

        dd($result);
    }

    public function test9()
    {
        //$data=Member::find(4)->toArray();\
        $data = Member::where("id", '>', 4)->first();
        dd($data);
    }

    public function test10()
    {
//        $data=Member::find(4);
//        $data->email='88@qq.com';
//        $result=$data->save();
//        dd($result);
        $result = Member::where('id', '7')->update(['age' => '77']);
        dd($result);
    }

    public function test11()
    {
        $data = Member::find(7);
        dd($data->delete());
    }

    public function test12()
    {
        return view('home.test.test12');
    }

    public function test13(Request $request)
    {
        if (input::method() == 'POST') {
            $this->validate($request, [
                'name' => 'required|min:2|max:20',
                'age' => 'required|integer|min:1|max:100',
                'email' => 'required|email',
               'captcha'=>'required|captcha'
            ]);

        } else {
            return view('home.test.test13');
            // }
        }
    }
    //文件上传
    public function test14(Request $request){
        if (Input::method()=='POST'){
          if($request->hasFile('avatar') && $request->file('avatar')->isValid()){
               // dd($request->file('avatar')->getClientOriginalName());
              //dd($request->file('avatar')->getClientSize());
          //$request->file('avatar')->move('./upload',md5(time()-rand(100000,999999)));
              $path=md5(time().rand(10000,99999)).'.'.$request->file('avatar')->clientExtension();
              $request->file('avatar')->move('./uploads',$path);
              $data=$request->all();
              $data['avatar']='./uploads/'.$path;
              $result=Member::create($data);
//              dd($result);
              return redirect('/');
          }


        }else{
            return view('home.test.test14');
        }
    }
    public function test15(){
        $data=Member::paginate(2);
        return view('home.test.test15',compact('data'));
    }
    public function test16(){
        return view('home.test.test16');

    }
    public function test17(){
        $data=Member::all();
   return response()->json($data);
      //  return json_decode($data);
    }
    public function test18(){
        Session::put('name','hahah');
        echo Session::get('name');
        dd(Session::get('key','博客'));
    }
    //连表操作
    public function test20(){
       $data= DB::table('article as t1')->select('t1.id','t1.article','t2.author')->leftJoin('author as t2','t1.author_id','=','t2.id')->get();
    dd($data);
    }
    public function test21(){
        $data=\App\Home\Article::get();
        foreach ($data as $key=>$value){
            //dd($value);
            echo $value->id . '&emsp;' . $value->article . '&emsp;' .$value->author->author .'<br/>';
        }

    }
    public function  test22(){
        $data=\App\Home\Article::get();
        foreach ($data as $key=>$value){
            echo "当前文件名称为:".$value->article . ',旗下的评论为：<br/>';
            foreach ($value->comment as $k=>$val){
                echo '&emsp;' .$val->comment .'<br/>';
            }
        }
    }
    public function test23(){
        $data=\App\Home\Article::get();
        foreach ( $data as $key=>$value) {
            echo "当前的文章是：".$value->article.',所属关键词是<br/>';
            foreach ($value->keyword as $k=>$val){
                echo '&emsp;'.$val->keyword.'<br/>';
            }

        }
    }
}
