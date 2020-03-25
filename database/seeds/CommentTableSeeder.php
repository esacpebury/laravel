<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('comment')->insert([
           [
                'comment'=>'挖啥都奥奇偶的奇偶',
                'article_id'=>rand(1,2)
            ],
            [
                'comment'=>'挖啥都奥奇奇偶',
                'article_id'=>rand(1,2)
            ],
            [
                'comment'=>'挖啥都奥奇偶t偶',
                'article_id'=>rand(1,2)
            ],
            [
                'comment'=>'挖啥都奥奇偶o奇偶',
                'article_id'=>rand(1,2)
            ],
            [
                'comment'=>'挖啥都奥奇偶的fff奇偶',
                'article_id'=>rand(1,2)
            ],
        ]);
    }
}
