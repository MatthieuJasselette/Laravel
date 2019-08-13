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
        value="{{ old('title') }}">
    </div>
    <div>
      <textarea
        name="description"
        class=" input {{ $errors->has('description') ? 'is-danger' : ''}}"
        placeholder="Project decription"
        >{{ old('description') }}</textarea>
    </div>
    <div>
      <button type="submit">Create project</button>
    </div>
   @if($errors->any())
   <div class="notification is-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
   @endif
  </form>
@endsection