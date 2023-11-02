<?php

<form method="POST" action="{{ route('quizzes.store') }}">
    @csrf
    <input type="hidden" name="id" value="{{ $quiz->id }}">
    <div>
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{ old('title', $quiz->title) }}" required>
    </div>
    <!-- Add other fields for the quiz here -->
    <div>
        <button type="submit">Save Quiz</button>
    </div>
</form>
