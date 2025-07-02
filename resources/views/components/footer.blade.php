<footer class="bg-dark text-white pt-5 pb-4">
  <div class="container text-center text-md-start">
    <div class="row">

      <!-- Logo / Nombre -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold text-uppercase mb-3">Proyecto social</h5>
        <p class="text-muted">Comprometidos con el bienestar de nuestra comunidad a través de la formación, salud y oportunidades laborales.</p>
      </div>

      <!-- Enlaces -->
      <div class="col-md-2 mb-4">
        <h6 class="text-uppercase fw-bold mb-3">Enlaces</h6>
        <ul class="list-unstyled">
          <li><a href="{{ url('/') }}" class="text-white text-decoration-none">Inicio</a></li>
          <li><a href="{{ url('/about-us') }}" class="text-white text-decoration-none">Quiénes somos</a></li>
          <li><a href="{{ url('/gallery') }}" class="text-white text-decoration-none">Galería</a></li>
          <li><a href="{{ url('/transparency') }}" class="text-white text-decoration-none">Transparencia</a></li>
        </ul>
      </div>

      <!-- Programas -->
      <div class="col-md-3 mb-4">
        <h6 class="text-uppercase fw-bold mb-3">Programas</h6>
        <ul class="list-unstyled">
          <li><a href="{{ url('/formation') }}" class="text-white text-decoration-none">Formación comunitaria</a></li>
          <li><a href="{{ url('/employment') }}" class="text-white text-decoration-none">Empleo para todos</a></li>
          <li><a href="{{ url('/services') }}" class="text-white text-decoration-none">Servicios profesionales</a></li>
          <li><a href="{{ url('/volunteering') }}" class="text-white text-decoration-none">Voluntariado</a></li>
        </ul>
      </div>

      <!-- Contacto -->
      <div class="col-md-3 mb-4">
        <h6 class="text-uppercase fw-bold mb-3">Contacto</h6>
        <p class="text-muted mb-1"><i class="bi bi-geo-alt-fill me-2"></i>123 Calle Principal, Ciudad</p>
        <p class="text-muted mb-1"><i class="bi bi-envelope-fill me-2"></i>contacto@miclinica.org</p>
        <p class="text-muted mb-1"><i class="bi bi-telephone-fill me-2"></i>+52 123 456 7890</p>
      </div>
    </div>

    <!-- Línea inferior -->
    <div class="text-center pt-3 mt-4 border-top border-light">
      <small class="text-muted">&copy; {{ date('Y') }} Mi Clínica Médica. Todos los derechos reservados.</small>
    </div>
  </div>
</footer>
