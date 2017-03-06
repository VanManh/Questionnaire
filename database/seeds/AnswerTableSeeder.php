<?php

use Illuminate\Database\Seeder;

class AnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
            'content' => 'PHP1',
            'question_id' => 1,
        ]);
        DB::table('answers')->insert([
            'content' => 'PHP2',
            'question_id' => 1,
        ]);
        DB::table('answers')->insert([
            'content' => 'PHP3',
            'question_id' => 1,
        ]);
        DB::table('answers')->insert([
            'content' => 'PHP4',
            'question_id' => 1,
        ]);
        DB::table('answers')->insert([
            'content' => 'LAB 1',
            'question_id' => 2,
        ]);
        DB::table('answers')->insert([
            'content' => 'LAB 2',
            'question_id' => 2,
        ]);
        DB::table('answers')->insert([
            'content' => 'LAB 3',
            'question_id' => 2,
        ]);
        DB::table('answers')->insert([
            'content' => 'LAB 4',
            'question_id' => 2,
        ]);
        DB::table('answers')->insert([
        'content' => 'LAB 11',
        'question_id' => 3,
         ]);
        DB::table('answers')->insert([
            'content' => 'LAB 12',
            'question_id' => 3,
        ]);
        DB::table('answers')->insert([
            'content' => 'LAB 13',
            'question_id' => 3,
        ]);
        DB::table('answers')->insert([
            'content' => 'LAB 14',
            'question_id' => 3,
        ]);
        DB::table('answers')->insert([
            'content' => 'LAB 11',
            'question_id' => 4,
        ]);
        DB::table('answers')->insert([
            'content' => 'LAB 21',
            'question_id' => 4,
        ]);
        DB::table('answers')->insert([
            'content' => 'LAB 31',
            'question_id' => 4,
        ]);
        DB::table('answers')->insert([
            'content' => 'LAB 41',
            'question_id' => 4,
        ]);
    }
}
