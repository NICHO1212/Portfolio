@extends('index')

@section('content')
<div class="content-head">
  <h1>Contact</h1>
</div>
<div class="cards">
  <div class="card">
    <div class="card-info">
      <a href="https://t.me/EstebanSalasGuzman">
        <i class="fab fa-telegram fa-3x"></i>
      </a>
      <a href="https://twitter.com/Nicho_Esteban">
        <i class="fab fa-twitter fa-3x"></i>
      </a>
      <a href="https://www.youtube.com/channel/UCVIv44SbRK7YlirwidlZEAw">
        <i class="fab fa-youtube fa-3x"></i>
      </a>
    </div>
  </div>
  <div class="card">
    <p>Send me a message</p>
    <form method="post" action="">
      @csrf
      <div class="form-group">
        <label for="email">Your Email:</label>
        <input id="email" class="form-control" type="text" name="email">
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" class="form-control" name="message" rows="4"></textarea>
      </div>
      
      <button type="submit" class="btn btn-primary-outline">Send Message</button>
    </form>
  </div>
</div>
@endsection