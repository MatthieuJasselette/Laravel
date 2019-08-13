@extends('layout')

@section('content')
  <h1 class="title">Projects</h1>
 <ul>
  @foreach($projects as $project)
  <li><a href="/projects/{{ $project->id }}">{{ $project->title }} :</a> {{ $project->description }}</li>
  @endforeach
 </ul>
 <a href="/projects/create">Create a new project</a>
@endsection