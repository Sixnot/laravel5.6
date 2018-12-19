<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *入库操作
     * @return void
     */
    public function run()
    {
        //
        $data=[];
        for($i=1;$i<=10000;$i++)
        {
            $data[]=[
              'uid'=>$i,
              'title'=>'标题'.$i,
              'desn'=>'描述'.$i,
              'cnt'=>'内容'.$i,
            ];
        }
        DB::table('article')->insert($data);
    }
}
