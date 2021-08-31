<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
   /**
     * データベース初期値設定の実行
     *
     * @return void
     */
     
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Editor',
            'email' => 'gakuin2023.syukatu@gmail.com',
            'password' => Hash::make('ee112233'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),

        ]);
    }
}
