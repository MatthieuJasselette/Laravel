<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', 'Laracrafts')</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
  <style>
    .is-complete{
      text-decoration: line-through;
    }
    body{
      width: 90%;
      margin: 0 5%;
    }
  </style>
</head>
<body>
  <div class="d-flex">
    <a href="/">Home</a> |
    <a href="/projects">See our amazing projects</a>
  </div>
  <div class="container">
    @yield('content')
  </div>
</body>
</html>