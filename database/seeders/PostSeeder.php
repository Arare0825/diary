<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([[
       'user_id' => 1,
       'date' => 2022_02_21,
       'good' => 'いいこと',
       'bad' => '悪いこと',
       'goal' => '目標'
        ],
        [
        'user_id' => 2,
        'date' => 2022_02_21,
        'good' => 'いいこと',
        'bad' => '悪いこと',
        'goal' => '目標'
        ],
        [
            'user_id' => 1,
            'date' => 2022_02_21,
            'good' => 'いいこと',
            'bad' => '悪いこと',
            'goal' => '目標'
            ]
            ]);

    }
}
