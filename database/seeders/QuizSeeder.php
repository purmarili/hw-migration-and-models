<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quizzes')->insert([
            ['name' => 'Quiz 1', 'description' => 'Description for Quiz 1'],
            ['name' => 'Quiz 2', 'description' => 'Description for Quiz 2'],
            ['name' => 'Quiz 3', 'description' => 'Description for Quiz 3'],
            ['name' => 'Quiz 4', 'description' => 'Description for Quiz 4'],
            ['name' => 'Quiz 5', 'description' => 'Description for Quiz 5'],
        ]);
    }
}
