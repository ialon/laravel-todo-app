@extends('layouts.app')

@section('title', 'List of tasks')

@section('content')
    <div>
        @forelse ($tasks as $task)
            <div>
                <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
                <p>{{ $task->description }}</p>
            </div>
        @empty
            <p>No tasks available</p>
        @endforelse
    </div>
@endsection
