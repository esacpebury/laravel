<?php

use Illuminate\Database\Seeder;

class KeyWordAndRelationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('keyword')->insert([
            ['keyword'=>'防滑'],
            ['keyword'=>'风格小'],
            ['keyword'=>'跑跑'],
            ['keyword'=>'小花'],
        ]);
        DB::table('relation')->insert([
            [
                'article_id'=>rand(1,3),
                'key_id'    =>rand(1,4)
            ],
            [
            'article_id'=>rand(1,3),
                'key_id'    =>rand(1,4)
            ],
            [
            'article_id'=>rand(1,3),
                'key_id'    =>rand(1,4)
            ],
            [
            'article_id'=>rand(1,3),
                'key_id'    =>rand(1,4)
            ]
        ]);
    }
}
