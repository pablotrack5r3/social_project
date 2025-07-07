@extends('layouts.app')

@section('content')
    <section class="py-5 bg-white">
  <div class="container">
    <div class="row align-items-center g-5">
      <!-- Imagen ilustrativa -->
      <div class="col-md-6">
        <img src="https://images.unsplash.com/photo-1637245587315-2201b9e34a01?q=80&w=772&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Voluntariado social" class="img-fluid rounded-4 shadow-sm">
      </div>

      <!-- Contenido -->
      <div class="col-md-6">
        <h2 class="fw-bold display-6 mb-3">¿Quiénes Somos?</h2>
        <p class="text-muted fs-5 mb-4">
          Somos una organización sin fines de lucro comprometida con el desarrollo social, la inclusión y la mejora de la calidad de vida de las personas más vulnerables. Creemos en el poder de la comunidad para generar cambios reales y sostenibles.
        </p>

        <ul class="list-unstyled">
          <li class="mb-3 d-flex align-items-start">
            <span class="me-3 fs-4 text-primary">🤝</span>
            <div>
              <strong>Compromiso humano:</strong> Trabajamos de la mano con comunidades locales para entender sus necesidades reales.
            </div>
          </li>
          <li class="mb-3 d-flex align-items-start">
            <span class="me-3 fs-4 text-success">📚</span>
            <div>
              <strong>Educación y oportunidades:</strong> Creamos programas de formación, apoyo y desarrollo integral para niños, jóvenes y adultos.
            </div>
          </li>
          <li class="mb-3 d-flex align-items-start">
            <span class="me-3 fs-4 text-danger">🌱</span>
            <div>
              <strong>Sostenibilidad:</strong> Promovemos iniciativas autosustentables que empoderen a las personas y respeten el medio ambiente.
            </div>
          </li>
        </ul>

        <a href="{{ url('/conocenos') }}" class="btn btn-primary mt-3 px-4">Conócenos más</a>
      </div>
    </div>
  </div>
</section>
@endsection

