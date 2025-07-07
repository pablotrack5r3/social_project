<nav class="navbar navbar-expand-lg custom-navbar">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ url('/') }}">Social<span class="dot">.</span></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/about-us') }}">Quiénes Somos</a></li>
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
        <li class="nav-item"><a class="nav-link" href="{{ url('/work-with-us') }}">Trabaja con nosotros</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/gallery') }}">Galería</a></li>
        <!-- <li class="nav-item"><a class="nav-link" href="{{ url('/transparency') }}">Transparencia</a></li> -->
      </ul>

      <a href="#" class="btn btn-primary btn-sm ms-lg-3">Participa</a>
    </div>
  </div>
</nav>

<style>

  .custom-navbar {
    background-color: color-mix(in srgb, #5d57f4 5%, transparent 95%);
    padding-top: 15px;
    padding-bottom: 15px;
    position: sticky;
    top: 0;
  }

  .custom-navbar .navbar-brand {
    font-size: 24px;
    color: #1a1a1a;
  }

  .custom-navbar .navbar-brand .dot {
    color: #5a55ff;
  }

  .custom-navbar .nav-link {
    color: #1a1a1a;
    margin: 0 12px;
    font-weight: 500;
    transition: color 0.3s ease;
  }

  .custom-navbar .nav-link.active,
  .custom-navbar .nav-link:hover,
  .custom-navbar .nav-link:focus {
    color: #5a55ff;
  }

  .custom-navbar .btn-primary {
    background-color: #5a55ff;
    border: none;
    padding: 8px 16px;
    font-weight: 500;
    border-radius: 6px;
    transition: background-color 0.3s ease;
  }

  .custom-navbar .btn-primary:hover {
    background-color: #443dff;
  }

  .dropdown-menu {
    font-size: 14px;
  }
</style>
