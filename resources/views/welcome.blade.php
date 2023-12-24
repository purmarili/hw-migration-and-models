

@foreach ($quizzes as $quiz)
    <div>
        <h3>{{ $quiz->title }}</h3>
        @if($quiz->photo)
            <img src="{{ $quiz->photo }}" alt="Quiz Photo">
        @endif
        @if($quiz->description)
            <p>{{ $quiz->description }}</p>
@endif
