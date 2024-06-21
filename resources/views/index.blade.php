<div>
    List of tasks
</div>

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
