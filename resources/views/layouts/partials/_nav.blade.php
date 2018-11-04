<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('root_path') }}">Laracarte</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="nav navbar-nav">
      <li class="nav-item {{set_active_route('root_path')}}"><a class="nav-link" href=" {{ route('root_path') }} ">Home <span class="sr-only">(current)</span></a></li>
      <li class="nav-item {{set_active_route('about_path')}}">  <a class="nav-link" href=" {{ route('about_path') }} ">About</a></li>
      <li class="nav-item"> <a class="nav-link" href="#">Artisans</a></li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Planet
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Laravel.com</a>
          <a class="dropdown-item" href="#">Laravel.io</a>
          <a class="dropdown-item" href="#">Laracast</a>
          <a class="dropdown-item" href="#">Larajobs</a>
          <a class="dropdown-item" href="#">Laravel News</a>
          <a class="dropdown-item" href="#">Larachat</a>
        </div>
      </li>
      <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
    </ul>

    <ul class="navbar-nav" style="padding-left: 70%;">
      <li class="nav-item">  <a class="nav-link" href="#">Login</a></li>
      <li class="nav-item"> <a class="nav-link" href="#">Register</a></li>
    </ul>

  </div>
</nav>