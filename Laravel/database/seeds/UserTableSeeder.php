<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate(); //2回目実行の際にシーダー情報をクリア
       DB::table('users')->insert([
           'over_name'=>'テスト',
           'under_name' => '1',
           'username' => 'test_user',
           'bio' => 'テスト用です',
           'mail_address' => 'test_01@gmail.com',
           'password' => Hash::make('1111111111'),
       ]);
    }
}
