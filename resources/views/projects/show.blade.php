@extends('layout')

@section('content')
  <h1 class="title">{{ $project->title }}</h1>
  <div class="content">{{ $project->description }}</div>
  <div>
    @foreach($project->tasks as $task)
      <li>{{ $task->description }}</li>
    @endforeach
  </div>
  <p>
    <a href="/projects/{{ $project->id }}/edit">Edit</a>
  </p>
@endsection