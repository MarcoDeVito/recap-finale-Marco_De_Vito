<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand ms-5" href="{{route('homepage')}}">{{env('APP_NAME')}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('form')}}">Form</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('articles.index')}}">Articoli</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('categories.index')}}">Categorie</a>
          </li>
          
        </ul>
        <div class="ms-auto me-5">
          @guest
          <a href="{{route('login')}}" class="btn btn-outline-dark">Accedi</a>
            <a href="{{route('register')}}" class="btn btn-outline-dark">Registrati</a>
          @endguest
          @auth
            <form action="{{'logout'}}" method="post">@csrf
              <button class="btn btn-dark" type="submit">Log Out</button>
            </form>
          @endauth
        </div>
      </div>
    </div>
  </nav>

  