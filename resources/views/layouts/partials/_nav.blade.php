
<nav class="navbar navbar-expand-md navbar-dark static-top bg-dark">
  <a class="navbar-brand" href="{{ route('root_path') }}">{{ config('app.name') }}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link {{ set_active_route('root_path') }}" href="{{ route('root_path') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link  {{ set_active_route('about_path') }}" href="{{ route('about_path') }}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Artisans</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="http://Laravel.com">Laravel.com</a>
          <a class="dropdown-item" href="#">Laravel.io</a>
          <a class="dropdown-item" href="#">Laracats</a>
          <a class="dropdown-item" href="#">Larajobs</a>
          <a class="dropdown-item" href="#">Laravel News</a>
          <a class="dropdown-item" href="#">Larachat</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link  {{ set_active_route('contact_path') }}" href="{{ route('contact_path') }}">Contact</a>
      </li>
    </ul>
    <ul class="navbar-nav navbar-right">
      
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Register</a>
      </li>
    </ul>
  </div>
</nav>