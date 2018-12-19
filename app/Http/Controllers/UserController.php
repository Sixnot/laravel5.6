<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        return view('user.index');
    }

    public function addSave(UserRequest $request)
    {
        //$this->validate验证
       /*$input = $this->validate($request,[
          'username'=>'required|between:2,6',
          'password'=>'required|confirmed',
          'password_confirmed'=>'required',
          'email'=>'required|email'
       ],[
           'username.required'=>'请填写用户名',
           'username.between'=>'账号长度2-6个字符',
           'password.required'=>'请填写密码',
           'password.confirmed'=>'两次密码不一致',
           'repassword.required'=>'确认密码不能为空',
           'email.required'=>'邮箱不能为空',
           'email.email'=>'邮箱格式不正确'
       ]);*/

       //独立验证
       /* $validate = \Validator::make($request->all(),[
            'username'=>'required|between:2,6',
            'password'=>'required|confirmed',
            'password_confirmed'=>'required',
            'email'=>'required|email'
        ],[
            'username.required'=>'请填写用户名',
            'username.between'=>'账号长度2-6个字符',
            'password.required'=>'请填写密码',
            'password.confirmed'=>'两次密码不一致',
            'repassword.required'=>'确认密码不能为空',
            'email.required'=>'邮箱不能为空',
            'email.email'=>'邮箱格式不正确'
        ]);
       if ($validate->fails())
       {
            return redirect()->back()->withErrors($validate);
       }*/

       //验证器

    }
}
