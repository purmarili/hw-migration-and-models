<?php

@foreach ($quizzes as $quiz)
    <p>{{ $quiz->title }}</p>
    <a href="{{ route('quizzes.edit', $quiz) }}">Edit</a>
@endforeach

<a href="{{ route('quizzes.create') }}">Create New CRUD</a>
