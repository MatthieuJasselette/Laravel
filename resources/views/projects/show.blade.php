@extends('layout')

@section('content')
  <h1 class="title">
    {{ $project->title }}
  </h1>
  <div class="content">
    {{ $project->description }}
  </div>
  <p>
    <a href="/projects/{{ $project->id }}/edit">Edit</a>
  </p>
  @if($project->tasks->count())
    <div class="box">
      @foreach($project->tasks as $task)
        <div>
          <form method="POST" action="/tasks/{{ $task->id }}">
            @method('PATCH')
            @csrf
            <label
              class="checkbox {{ $task->completed ? 'is-complete' : '' }}"
              for="completed">
              <input type="checkbox" name="completed"
              onChange="this.form.submit()"
              {{ $task->completed ? 'checked' : '' }}>
              {{ $task->description }}
            </label>
          </form>
        </div>
      @endforeach
    </div>
  @endif
  <div class="box">
    <form method="POST" action="/projects/{{ $project->id }}/tasks">
    @csrf
      <div class="field">
        <label for="description">New task</label>
        <div lcass="control">
          <input type="text" class="input" name="description"
          placeholder="New Task">
        </div>
      </div>
      <div class="field">
        <div class="control">
          <button type="submit" class="button is-link">Add task</button>
        </div>
      </div>
    </form>
  </div>
@endsection