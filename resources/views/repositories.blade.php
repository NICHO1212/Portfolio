@extends('index')

@section('content')

<div class="card">
  <div class="card-header">
    <h3>Repositories</h3>
  </div>
  <div class="card-body">
    <div class="card-about">
      <h5>Check my repositories with some simple codes I have made.</h5>
    </div>
    <div class="card-info">
      <a href="https://github.com/NICHO1212" title="GitHub">
        <i class="fab fa-github fa-3x"></i>
      </a>
      <a href="https://bitbucket.org/manudokiller/" title="Bitbucket">
        <i class="fab fa-bitbucket fa-3x"></i>
      </a>
    </div>
  </div>
  <div class="card-footer">
    <div class="card-info">
      <a class="link" href="https://bitbucket.org/manudokiller/api-web-laravel-7/src/master/" title="Api - Web - Laravel 7">
        API
      </a>
      <a class="link" href="https://bitbucket.org/manudokiller/graphql/src/master/" title="Graphql - Laravel 7">
        Graphql
      </a>
      <a class="link" href="https://bitbucket.org/manudokiller/twilio-laravel-7/src/master/" title="Twilio - Laravel 7">
        Twilio Chat
      </a>
      <a class="link" href="https://github.com/NICHO1212/Portfolio" title="Portfolio - Laravel 7">
        This Portfolio
      </a>
    </div>
  </div>
</div>

@endsection