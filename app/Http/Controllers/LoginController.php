<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//导入input
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    //
    public function index()
    {
        return '用户登录';
    }
    //Input登录处理
    public  function  login()
    {
        //get获取请求数据
        $username = Input::get('username','zhangsan');
        $password = Input::get('password','123456');

        //获取全部
        dump(Input::all());

        //获取指定字段
        dump(Input::only(['username']));

        //排除不要的字段、
        dump(Input::except(['username']));
        if($password == '123456' && $username == 'admin')
        {
            return '登陆成功';
        }
         return '密码或者账号错误';
    }

    //依赖注入（request）处理登录
    public function login2(Request $request)
    {
        //获取指定字段
        $username = $request->get('username','null');
        $password = $request->get('password','null');

        //获取全部
        dump($request->all());

        //获取多个指定字段
        dump($request->only('username'));

        //排除不要字段
        dump($request->except('password'));

        //判断字段是否存在
        dump($request->has('age'));

        //判断请求类型
        dump($request->isMethod('post'));
        if($password == '123456' && $username == 'admin')
        {
            return '登陆成功';
        }
        return '密码或者账号错误';
    }

    public function loginHandel()
    {
        return 11;
    }
 }
