@extends('index')

@section('content')

<div class="card">
  <div class="card-header">
    <h3>Contact</h3>
  </div>
  <div class="card-body">
    <form method="post" action="{{ url('/send') }}">
      @csrf
      <div class="form-group">
        <label for="email">Your Email:</label>
        <input 
          id="email" type="email" name="email" required
          placeholder="Make sure you are writing your email address correctly"
          class="form-control @error('email') is-invalid @enderror" 
          value="{{ old('email') }}" autocomplete="email">
        @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea 
          id="message" name="message" required rows="4"
          class="form-control @error('message') is-invalid @enderror"
          >{{ old('message') }}</textarea>
        @error('message')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <button type="submit" class="btn btn-outline-primary">Send Message</button>
      @error('success')
        <div class="isset alert alert-success alert-dismissible fade show" role="alert">
          {{ $errors->first('success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @enderror
      @error('error')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ $errors->first('error') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @enderror
    </form>
  </div>
  <div class="card-footer">
    <div class="card-info">
      <a href="https://t.me/ManudoKiller" title="Telegram">
        <i class="fab fa-telegram fa-3x"></i>
      </a>
      <a href="https://www.linkedin.com/in/esteban-enrique-salas-guzm%C3%A1n-862b8a101/" title="LinkedIn">
        <i class="fab fa-linkedin-in fa-3x"></i>
      </a>
      <a href="https://www.youtube.com/playlist?list=PLtC2fXjf_C2SpP4DqnP8GKfC3W37hfB-_" title="YouTube Channel">
        <i class="fab fa-youtube fa-3x"></i>
      </a>
    </div>
  </div>
</div>

@endsection