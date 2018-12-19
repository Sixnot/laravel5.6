<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;

class MydbController extends Controller
{
    //
    public function db()
    {
//        $sql = "insert into la_user (username,password) values (:username,:password)";
//        $ret = \DB::insert($sql,[':username'=>'admin',':password'=>'123456']);
            //修改
        $sql = 'update la_user set username=:username where id =:id';
        $ret = \DB::update($sql,['username'=>'lll','id'=>1]);
        dump($ret);
    }
    //DB构造器
    public function db2(Request $request)
    {
        //查询所有
        #$ret = \DB::table('user')->get();
        //获取所有 只查询username字段
        #$ret = \DB::table('user')->get(['username']);

        //查询id大于等于2的
        #$ret = \DB::table('user')->where('id','>=','2')->get();
        //查询id大于等于2 或者 username =’admin‘
        /*$ret = \DB::table('user')
                ->Where('id','>=','2')
                ->orwhere('username','admin')
                ->get();*/
        //根据关键词搜索
       /* $kw = $request->get('kw','user');
        $ret = \DB::table('user')->when($kw,function (Builder $query) use ($kw){
            $query->where('username','like',"%{$kw}%");
        })->get();*/

       //查询id=2的记录
        //$ret = \DB::table('user')->where('id','2')->first();

        //获取一个用户的username值
        #$ret = \DB::table('user')->where('id','2')->value('username');

        //获取一列的数据
        #$ret = \DB::table('user')->pluck('username','id');

        //获取总数
        #$ret = \DB::table('user')->where('id','>','1')->count();

        //排序
        #$ret = \DB::table('user')->orderBy('id','desc')->get();

        //分页
        //$ret = \DB::table('user')->limit('1')->get();





        //添加一条数据
        $table = \DB::table('user');
        /*$ret = $table->insert([
           'username' => 'user3',
           'password' => '654321'
        ]);*/

        //添加多条记录
        /*for ($i = 5;$i <=10;$i++):
            $data[]=[
                'username' => 'user'.$i,
                'password' => '654321'
            ];
        endfor;
        $ret = $table->insert($data);*/

        //添加单条 并返回id
        /*$ret = $table->insertGetId([
            'username' => 'user11',
            'password' => '654321'
        ]);*/


        //修改数据
        #$ret = $table->where('id','9')->update(['username'=>'yingeng']);

        //删除
        $ret = $table->where('id',10)->delete();

        //简写
        //$ret = $table->delete(10);
        dump($ret);
    }
}
