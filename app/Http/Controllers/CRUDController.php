<?php


namespace App\Http\Controllers;

use App\Models\CRUD;
use Illuminate\Http\Request;

class CRUDController extends Controller
{
    public function index()
    {
        $quizzes = CRUD::all();
        return view('quizzes.index', compact('quizzes'));
    }

    public function create()
    {
        return view('quizzes.create', ['quiz' => new CRUD()]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id' => 'sometimes|exists:quizzes,id',
            'title' => 'required|string|max:255',
            // add other quiz attributes here
        ]);

        CRUD::updateOrCreate(['id' => $request->id], $data);

        return redirect()->route('quizzes.index');
    }

    public function edit(Quiz $quiz)
    {
        return view('quizzes.edit', compact('quiz'));
    }
}
