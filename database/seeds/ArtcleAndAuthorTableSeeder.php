<?php

use Illuminate\Database\Seeder;

class ArtcleAndAuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('article')->insert([
           [
               'article'=>'有钱',
               'author_id'=>rand(1,3)

           ],
            [
                'article'=>'没钱',
                'author_id'=>rand(1,3)

            ],
            [
                'article'=>'回家过年',
                'author_id'=>rand(1,3)

            ],

        ]);
        DB::table('author')->insert([
           [
              'author'=>'人马',
           ] ,
            [
                'author'=>'人才',
            ] ,
            [
                'author'=>'结束',
            ] ,
        ]);
    }
}
