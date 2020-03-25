<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//根路由
Route::get('/', function () {
   // return view('welcome');
    echo'awea';
});
//
//Route::get('/home',function (){
//    echo'当前的访问地址是home';
//})->name('ssa');
//Route::any('/home1',function (){
//    echo'当前的访问地址是home1';
//});
//Route::match(['post','get'],'/home3',function (){
//    echo'当前的访问地址是home3';
//});
//Route::get('/home2/{id}',function ($id){
//    echo'当前的用户id是：'.$id;
//});
//Route::get('/home4/{id?}',function ($id='eee'){
//    echo'当前的用户id是：'.$id;
//});
//Route::get('/home5',function (){
//    echo'当前的用户id是：'.$_GET['id'];
//});


Route::group(['prefix'=>'admin'],function (){
    Route::get('user/home',function (){
        echo'当前的访问地址是home';
    })->name('ssa');
    Route::any('/home1',function (){
        echo'当前的访问地址是homew1';
    });
    Route::match(['post','get'],'/home3',function (){
        echo'当前的访问地址是home3';
    });
    Route::get('/home2/{id}',function ($id){
        echo'当前的用户id是：'.$id;
    });
    Route::get('/home4/{id?}',function ($id='eee'){
        echo'当前的用户id是：'.$id;
    });
    Route::get('/home5',function (){
        echo'当前的用户id是：'.$_GET['id'];
    });

});
Route::get('/home/index/index','Home\IndexController@index');
Route::get('/admin/index/index','Admin\IndexController@index');
Route::get('/home/test/test1','TestController@test1');
//Route::get('/home/index/add','Home\IndexController@add');
//Route::get('/home/index/delete','Home\IndexController@delect');
//Route::get('/home/index/update','Home\IndexController@update');
//Route::get('/home/index/select','Home\IndexController@select');
Route::group(['prefix'=>'home/index'],function (){
    Route::get('add','Home\IndexController@add');
    Route::get('delete','Home\IndexController@delect');
    Route::get('update','Home\IndexController@update');
    Route::get('select','Home\IndexController@select');
});
Route::group(['prefix'=>'home/test/'],function (){
   Route::get('test2','TestController@test2');
   //test相关方法
    Route::get('test4','TestController@test4');
    Route::get('test5','TestController@test5');
    Route::get('test6','TestController@test6');
    Route::post('test7','TestController@test7')->name('test7');

    //模型增删改查
    Route::post('test8','TestController@test8')->name('test8');
    Route::get('test9','TestController@test9');
    Route::get('test10','TestController@test10');
    Route::get('test11','TestController@test11');
    Route::get('test12','TestController@test12');
    Route::any('test13','TestController@test13');
    //文件上传
    Route::any('test14','TestController@test14');
    //分页
    Route::get('test15','TestController@test15');

    //ajax
    Route::get('test16','TestController@test16');
    Route::get('test17','TestController@test17');
    //会话控制
    Route::get('test18','TestController@test18');
    Route::get('test20','TestController@test20');
    //关联模型 一对一
    Route::get('test21','TestController@test21');
    //一对多
    Route::get('test22','TestController@test22');
    //多对多
    Route::get('test23','TestController@test23');
});