<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ route('home') }}"><img src="{{asset('imagenes/pinguino.png')}}" width="75px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">Inicio <span class="sr-only"></span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">Consultar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Registrar</a>
      </li>
       </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Busca tu BonIce " aria-label="Search">
      <button class="btn my-sm-0 bg-danger" type="submit">Buscar</button>
    </form>
  </div>
</nav>