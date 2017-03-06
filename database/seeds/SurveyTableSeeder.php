<?php

use Illuminate\Database\Seeder;

class SurveyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('surveys')->insert([
            'name' => 'Dev PHP',
        ]);
        DB::table('surveys')->insert([
            'name' => 'Dev C',
        ]);
        DB::table('surveys')->insert([
            'name' => 'Dev .NET',
        ]);
        DB::table('surveys')->insert([
            'name' => 'Dev Python',
        ]);
        DB::table('surveys')->insert([
            'name' => 'Dev Java',
        ]);
        DB::table('surveys')->insert([
            'name' => 'Dev Go',
        ]);
        DB::table('surveys')->insert([
            'name' => 'Dev Perl',
        ]);
    }
}
