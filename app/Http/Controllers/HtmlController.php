<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlController extends Controller
{
    //
    public function index()
    {
        $data = ['id'=>1,'name'=>'张三','title'=>'<a href="http://www.baidu.com">百度</a>','age'=>23];
        $list = [
            ['id'=>1,'title'=>'php'],
            ['id'=>2,'title'=>'java'],
            ['id'=>3,'title'=>'c++'],
            ['id'=>4,'title'=>'UI'],
        ];
        return view('html.index')->with(['data'=>$data,'list'=>$list]);
    }

    public function  inc()
    {
        return view('html.inc');
    }
}