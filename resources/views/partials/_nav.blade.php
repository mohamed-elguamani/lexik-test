<nav class="navbar navbar-expand-lg navbar-light main-navbar">
  <div class="container">  
    <a class="navbar-brand" href="{{route('home')}}">
        <img src="{{asset('img/Logo.png')}}" alt="Lexik logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-bar" aria-controls="main-bar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse main-bar" id="main-bar">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{route('home')}}">Accueil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('group.index')}}">Groups</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('user.index')}}">Users</a>
        </li>
        </ul>

    </div>
  </div>  
</nav>