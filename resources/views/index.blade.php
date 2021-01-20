<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Esteban Salas Guzmán</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
  />
  <link 
    rel="stylesheet" 
    href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" 
    integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" 
    crossorigin="anonymous"
  >
  @include('css')
</head>
<body>
  <main>
    <section class="glass">
      <div class="dashboard">
        <div class="user">
          <img src="" alt="" />
          <h3>Esteban Salas Guzmán</h3>
          <p>Software Developer</p>
        </div>
        <div class="links">
          <div class="link">
            <a href="{{ route('contact') }}">
              <h2>About Me</h2>
            </a>
          </div>
          <div class="link">
            <a href="{{ route('contact') }}">
              <h2>Repositories</h2>
            </a>
          </div>
          <div class="link">
            <a href="{{ route('contact') }}">
              <h2>Contact</h2>
            </a>
          </div>
        </div>
      </div>
      <div class="content">
        @yield('content')
      </div>
    </section>
</main>
<div class="circle1"></div>
<div class="circle2"></div>
</body>
</html>