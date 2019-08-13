@extends('layout')

@section('content')
    <h1 class="title">Home page</h1>

<!-- vanilla php -->
    <!-- <ul>
        <?php foreach ($tasks as $task) : ?>
            
            <li><?= $task ?></li>

        <?php endforeach; ?>
    </ul> -->

<!-- blade -->
    <ul>
        @foreach($tasks as $task)
            
            <li>{{ $task }}</li>

        @endforeach
    </ul>
@endsection