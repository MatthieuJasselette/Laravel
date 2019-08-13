@extends('layout')

@section('content')
  <h1>Create a new project</h1>
  <form method="POST" action="/projects">
    {{ csrf_field() }}

    <div>
      <input
        type="text"
        name="title"
        class="input {{ $errors->has('description') ? 'is-danger' : ''}}"
        placeholder="Project title"
        value="{{ old('title') }}"
        required>
    </div>
    <div>
      <textarea
        name="description"
        class=" input {{ $errors->has('description') ? 'is-danger' : ''}}"
        placeholder="Project decription"
        required>
          {{ old('description') }}
      </textarea>
    </div>
    <div>
      <button type="submit">Create project</button>
    </div>
    @include('errors')
  </form>
@endsection