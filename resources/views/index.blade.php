<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Esteban Salas Guzmán</title>

  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

  @include('css')

</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/') }}">
        <h5>Esteban Salas Guzmán</h5>
        <h6>Software Developer</h6>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}"><h5>About Me</h5></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('repositories') }}"><h5>Repositories</h5></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('contact') }}"><h5>Contact</h5></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main>
    <div class="container">
      @yield('content')
      <div class="circle circle-left"></div>
      <div class="circle circle-right"></div>
    </div>
  </main>

</body>
</html>