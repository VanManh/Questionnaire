<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'content' => 'PHP',
            'survey_id' => 1,
        ]);
        DB::table('questions')->insert([
            'content' => 'Lý Thuyết',
            'survey_id' => 1,
        ]);
        DB::table('questions')->insert([
            'content' => 'Thực Hành',
            'survey_id' => 1,
        ]);
        DB::table('questions')->insert([
            'content' => 'C',
            'survey_id' => 2,
        ]);
    }
}
