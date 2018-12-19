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

Route::get('/', function () {
    return view('welcome');
});

//get请求
//Route::get('/req',function (){
//
//    return 'get';
//});
////post请求
//Route::post('/req',function (){
//    return 'post';
//
//});
////put请求
//Route::put('/req',function (){
//    return 'put';
//
//});
////delete请求
//Route::delete('/req',function (){
//    return 'delete';
//
//});
//match 可以一次性写多个请求类型
//第一个参数 请求类型 第二个 uri 第三个 回调或者控制器
//Route::match(['get','post'],'/req',function()
//{
//   dump($_SERVER);
//});

//获取所有的请求类型  不推荐使用
//Route::any('/req',function(){
//   dump($_SERVER);
//});

//获取文章信息
//{}必填参数   {?}可选参数  where 参数限制条件
/*Route::get('article/{id}',function ($id){
    echo $id;
})->where(['id'=>'\d+']);*/

/*Route::get('article/{id}',function (int $id){
    echo $id;
});*/

//路由别名
/*Route::get('/req',function()
{
    return 'get';
})->name('index.req');

Route::get('/req1',function()
{
    //路由别名得到url地址
    return  route('index.req');
});*/

//路由分组
/*Route::group(['prefix'=>'admin'],function ()
{
    Route::get('/login',function (){
        return 1;
    });
    Route::get('/logout',function (){
        return 2;
    });
    Route::group(['prefix'=>'index'],function()
    {
        Route::get('/index',function (){
            return 3;
        });
        Route::get('/welcome',function (){
            return 4;
        })->name('index.welcome');
    });

});*/

//路由控制器
//如果类在http根目录则不用命名空间
//Route::get('login','LoginController@index')->name('login');
//
////在controllers下面有目录中的控制器类 要加命名空间
////Route::get('admin/article/{id}','Admin\ArticleController@index')->name('article.info');
//
////分组简化命名空间
//Route::group(['namespace'=>'Admin'],function (){
//    Route::get('admin/article/{id}','ArticleController@index')->name('article.info');
//});

//获取用户数据
//Route::get('login','LoginController@login2')->name('login');


Route::match(['get','post'],'login','LoginController@loginHandel');

//设置cookie
Route::get('ck',function ()
{
    //设置cookie
     response('设置cookie')->cookie('name','zhangsan',5);
    return redirect()->route('getck');
});

//获取cookie
Route::get('getck',function (){
    return request()->cookie('name');
})->name('getck');

//返回json数据
Route::get('json',function ()
{
   return response()->json(['id'=>1,'name'=>'张三']);
});

//视图
Route::get('view','HtmlController@index');
Route::get('inc','HtmlController@inc');

//添加用户
Route::get('useradd','UserController@index')->name('useradd');
Route::post('add','UserController@addSave')->name('user.add');

//DB操作原生sql
Route::get('db','MydbController@db')->name('my.db');
Route::get('db2','MydbController@db2')->name('my.db');