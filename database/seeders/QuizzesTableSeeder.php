<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class QuizzesTableSeeder extends Seeder
{
    public function run()
    {
        // Seed at least 16 quizzes with various data
        for ($i = 0; $i < 16; $i++) {
            DB::table('quizzes')->insert([
                'title' => Str::random(10),
                'description' => $i % 2 == 0 ? Str::random(50) : null,
                'photo' => $i % 3 == 0 ? 'https://example.com/photo' . $i . '.jpg' : null,
                'status' => $i % 4 == 0 ? 1 : 0,
            ]);
        }
    }
}
