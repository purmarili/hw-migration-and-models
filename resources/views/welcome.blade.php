<!DOCTYPE html>
<html>
<head>
    <title>Quiz App</title>
</head>
<body>
    @foreach($quizzes as $quiz)
        <h2>{{ $quiz->name }}</h2>
        <p>{{ $quiz->description }}</p>
    @endforeach
</body>
</html>
