<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200..900&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </head>

  <body>
    <nav class="navbar" style="background-color: #0e1111">
        <div class="container-fluid" >
            <a class="navbar-brand ms-auto me-auto title-nav" style="color: white" href="/">
                Squad Manager
            </a>
        </div>
    </nav>
    
    <nav class="navbar navbar-expand" style="background-color: #1e1e1e;">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-3 me-auto">
          <li class="nav-item active">
            <a class="nav-link" style="color: white" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: white" href="/createsquad">Squads</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: white" href="/createmission">Missions</a>
          </li>
        </ul>
      </div>

      <div class="me-3">

        @auth
        <div class="d-flex direction-row">

          <h6 class="text-white mt-auto mb-auto me-2">Logged user: {{ Auth::user()->name }}</h6>
          <form method="POST" action="{{ route('logout') }}" x-data>
            @csrf
            <button href="{{ route('logout') }}"
                @click.prevent="$root.submit();"
                class="form-control me-auto">
                {{ __('Log Out') }}
            </button>
          </form>
        </div>
        @endauth

        @guest
          <div class="d-flex direction-row">
            <a class="btn btn-outline-primary me-2" href="login">Login</a>
            <a class="btn btn-outline-secondary" href="register">Register</a>
          </div>
        @endguest
      </div>

    </nav>

    @if(session('msg'))
      <p class="msg text-center bg-success" >{{ session('msg') }}</p>
    @endif

    @yield('content')
  </body>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="/css/style.css">
</html>
