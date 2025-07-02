<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">Proyecto social</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/') }}">Inicio</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ url('/about-us') }}">Quiénes Somos</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Programas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ url('/formation') }}">Formación para la comunidad</a></li>
            <li><a class="dropdown-item" href="{{ url('/employment') }}">Empleo para todos</a></li>
            <li><a class="dropdown-item" href="{{ url('/services') }}">Servicios profesionales</a></li>
            <li><a class="dropdown-item" href="{{ url('/volunteering') }}">Voluntariado</a></li>
          </ul>
        </li>
         
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/work-with-us') }}">Trabaja con nosotros</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ url('/gallery') }}">Galería</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ url('/transparency') }}">Transparencia</a>
        </li>
      </ul>
    </div>

  </div>
</nav> 