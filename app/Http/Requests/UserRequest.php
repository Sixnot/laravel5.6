<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username'=>'required|between:2,6',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required',
            'email'=>'required|email'
        ];
    }
    public function messages()
    {
        return [
            'username.required'=>'请填写用户名',
            'username.between'=>'账号长度2-6个字符',
            'password.required'=>'请填写密码',
            'password.confirmed'=>'两次密码不一致',
            'password_confirmed.required'=>'确认密码不能为空',
            'email.required'=>'邮箱不能为空',
            'email.email'=>'邮箱格式不正确'
        ];
    }
}
