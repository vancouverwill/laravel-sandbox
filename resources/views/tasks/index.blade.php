@extends('app')


@section('content')
    <h1>Tasks</h1>
    @foreach ($tasks as $task)
        <article>
            <h2>{{ $task->content }}</h2>
            <a href="{{ url('/tasks', $task->id) }}">{{ $task->content }}</a>
        </article>
    @endforeach
@endsection