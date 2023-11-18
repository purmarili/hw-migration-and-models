<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    namespace App\Http\Controllers;

    use App\Models\Quiz;
    use Illuminate\Http\Request;
    
    class QuizController extends Controller
    {
        public function index()
        {
            $quizzes = Quiz::where('status', 1)
                           ->whereNotNull('photo')
                           ->orderBy('created_at', 'desc')
                           ->take(8)
                           ->get();
    
            if ($quizzes->count() < 8) {
                $additionalQuizzes = Quiz::whereNotNull('description')
                                         ->orderBy('created_at', 'desc')
                                         ->take(8 - $quizzes->count())
                                         ->get();
                $quizzes = $quizzes->merge($additionalQuizzes);
            }
    
            return view('welcome', compact('quizzes'));
        }
    }
}
