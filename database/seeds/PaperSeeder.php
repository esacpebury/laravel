<?php

use Illuminate\Database\Seeder;

class PaperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data=[
            ['papaer_name'=>'五年高考',
            'start_time'=>strtotime('+7 days'),
            'duration'=>'122',
             ],
            ['papaer_name'=>'五年高考',
            'start_time'=>strtotime('+7 days'),
            'duration'=>'122',
            ],
            ['papaer_name'=>'五年高考',
            'start_time'=>strtotime('+7 days'),
            'duration'=>'122',
            ]
        ];


        DB::table('paper')->insert($data);
    }
}
