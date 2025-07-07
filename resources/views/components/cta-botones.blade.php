<section class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="fw-bold display-5 mb-3">¡Súmate a nuestra causa!</h2>
    <p class="text-muted">
      Con tu participación podemos lograr un cambio real en la comunidad. Elige cómo quieres contribuir:
    </p>

    <div class="row justify-content-center g-4">
      <!-- Inscríbete -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body py-5">
            <div class="mb-3">
              <div class="display-4">📝</div>
            </div>
            <h5 class="card-title fw-bold">Inscríbete</h5>
            <p class="card-text text-muted">
              Forma parte de nuestros programas y accede a oportunidades únicas para aprender, crecer y ayudar.
            </p>
            <a href="{{ url('/inscribete') }}" class="btn btn-primary mt-3 px-4">Quiero Inscribirme</a>
          </div>
        </div>
      </div>

      <!-- Dona -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body py-5">
            <div class="mb-3">
              <div class="display-4">❤️</div>
            </div>
            <h5 class="card-title fw-bold">Dona</h5>
            <p class="card-text text-muted">
              Cada aporte cuenta. Con tu ayuda financiera podemos llegar más lejos y apoyar a más personas.
            </p>
            <a href="{{ url('/donar') }}" class="btn btn-danger mt-3 px-4">Quiero Donar</a>
          </div>
        </div>
      </div>

      <!-- Voluntariado -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body py-5">
            <div class="mb-3">
              <div class="display-4">🙌</div>
            </div>
            <h5 class="card-title fw-bold">Sé Voluntario</h5>
            <p class="card-text text-muted">
              Únete como voluntario y transforma vidas mientras vives experiencias enriquecedoras.
            </p>
            <a href="{{ url('/voluntariado') }}" class="btn btn-success mt-3 px-4">Ser Voluntario</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
