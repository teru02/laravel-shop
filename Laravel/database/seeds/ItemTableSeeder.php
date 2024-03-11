<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->truncate(); //2回目実行の際にシーダー情報をクリア
       DB::table('items')->insert([
           'user_id'=>'1',
           'name' => 'フィルムカメラ',
           'detail' => '1960年式のカメラです',
           'fee' => 200000,
       ]);

       DB::table('items')->insert([
           'user_id'=>'1',
           'name' => 'イヤホン',
           'detail' => 'ノイズキャンセリングがついてます',
           'fee' => 20000,
       ]);
    }
}
