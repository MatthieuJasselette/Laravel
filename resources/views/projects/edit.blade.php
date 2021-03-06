@extends('layout')

@section('content')
  <h1 class="title">Edit project</h1>
  <form method="POST" action="/projects/{{ $project->id }}">
  <!-- Can't submit a method PATH so use POST and then the following -->
    {{ method_field('PATCH') }}
    {{ csrf_field() }}
    <!-- or use
      @method('DELETE')
      @csrf -->

    <div class="field">
      <label for="title">Title</label>
      <div class="control">
        <input type="text" class="input" name="title" value="{{ $project->title }}">
      </div>
    </div>
    <div class="field">
      <label for="description">Description</label>
      <div class="control">
        <textarea name="description" class="textarea">{{ $project->description }}</textarea>
      </div>
    </div>
    <div class="field">
    <div class="control">
        <button type="submit" class="button is-link">Update project</button>
      </div>
    </div>
  </form>

@include('errors')

  <form method="POST" action="/projects/{{ $project->id }}">
  <!-- Can't submit a method PATH so use POST and then the following
    {{ method_field('DELETE') }}
    {{ csrf_field() }} -->
  <!-- or use -->
    @method('DELETE')
    @csrf

    <div class="field">
      <div class="control">
        <button type="submit" class="button is-danger">Delete project</button>
      </div>
    </div>
  </form>
@endsection
