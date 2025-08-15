<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel App</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">Home</a>
    <ul class="navbar-nav ms-3">
      <li class="nav-item"><a class="nav-link" href="{{ route('students.index') }}">Students</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('courses.index') }}">Courses</a></li>
    </ul>
  </div>
</nav>
<main class="container py-4">
  @yield('content')
</main>
</body>
</html>
