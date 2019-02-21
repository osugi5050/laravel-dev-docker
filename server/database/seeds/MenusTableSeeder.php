<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            [
                'name' => 'メニュー1',
                'body' => '内容1'
            ],
            [
                'name' => 'メニュー2',
                'body' => '内容2'
            ],
            [
                'name' => 'メニュー3',
                'body' => '内容3'
            ],
            [
                'name' => 'メニュー4',
                'body' => '内容4'
            ],
        ]);
    }
}
