@extends('layouts.app')

@section('title', 'Add task')

@section('content')
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control">

            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="5"></textarea>

            <label for="long_description">Long Description</label>
            <textarea name="long_description" id="long_description" class="form-control" rows="10"></textarea>

            <label for="completed">Completed</label>
            <input type="checkbox" name="completed" id="completed" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Add Task</button>
    </form>
@endsection
