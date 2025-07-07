@extends('layouts.app')

@section('content')
    <section class="py-5 bg-light">
    <div class="container">
    <h2 class="fw-bold display-6 mb-3"> Bolsa de trabajo </h2>
    <!-- Filtro -->
    <div class="row mb-4">
      <div class="col-md-3 mb-2">
        <input type="text" class="form-control" placeholder="Buscar oportunidad...">
      </div>
      <div class="col-md-3 mb-2">
        <select class="form-select">
          <option selected>Ubicación</option>
          <option>CDMX</option>
          <option>Guadalajara</option>
          <option>En línea</option>
        </select>
      </div>
      <div class="col-md-3 mb-2">
        <select class="form-select">
          <option selected>Área</option>
          <option>Educación</option>
          <option>Salud</option>
          <option>Ambiental</option>
        </select>
      </div>
      <div class="col-md-3 mb-2">
        <button class="btn btn-success w-100">Buscar</button>
      </div>
    </div>

    <!-- Categorías -->
    <div class="mb-5">
      <h4 class="fw-bold mb-3">Categorías Populares</h4>
      <div class="d-flex flex-wrap gap-2">
        <span class="badge bg-secondary p-2 px-3">Educación</span>
        <span class="badge bg-secondary p-2 px-3">Salud Comunitaria</span>
        <span class="badge bg-secondary p-2 px-3">Voluntariado Ambiental</span>
        <span class="badge bg-secondary p-2 px-3">Desarrollo Juvenil</span>
        <span class="badge bg-secondary p-2 px-3">Empoderamiento Femenino</span>
      </div>
    </div>

    <!-- Listado de oportunidades -->
    <div class="mb-5">
      <h4 class="fw-bold mb-3">Oportunidades Disponibles</h4>
      <div class="list-group shadow-sm">
        <div class="list-group-item d-flex justify-content-between align-items-center">
          <div>
            <h6 class="fw-semibold mb-0">Facilitador Comunitario</h6>
            <small class="text-muted">CDMX · Medio tiempo</small>
          </div>
          <a href="#" class="btn btn-outline-primary btn-sm">Postularme</a>
        </div>
        <div class="list-group-item d-flex justify-content-between align-items-center">
          <div>
            <h6 class="fw-semibold mb-0">Promotor de Salud</h6>
            <small class="text-muted">Guadalajara · Tiempo completo</small>
          </div>
          <a href="#" class="btn btn-outline-primary btn-sm">Postularme</a>
        </div>
        <div class="list-group-item d-flex justify-content-between align-items-center">
          <div>
            <h6 class="fw-semibold mb-0">Voluntario Ambiental</h6>
            <small class="text-muted">En línea · Horario flexible</small>
          </div>
          <a href="#" class="btn btn-outline-primary btn-sm">Postularme</a>
        </div>
      </div>
    </div>

    <!-- Organizaciones destacadas -->
    <div class="mb-5">
      <h4 class="fw-bold mb-4">Organizaciones Aliadas</h4>
      <div class="row text-center g-4">
        <div class="col-6 col-md-3">
          <img src="https://plus.unsplash.com/premium_photo-1661604459763-e18e4370e629?q=80&w=1674&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid mb-2">
          <h6 class="mb-0">Fundación Vida</h6>
        </div>
        <div class="col-6 col-md-3">
          <img src="https://images.unsplash.com/photo-1736166054893-7b05551c3232?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid mb-2">
          <h6 class="mb-0">Salud Activa</h6>
        </div>
        <div class="col-6 col-md-3">
          <img src="https://plus.unsplash.com/premium_photo-1661322657645-1617414c95f7?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid mb-2">
          <h6 class="mb-0">Jóvenes Unidos</h6>
        </div>
        <div class="col-6 col-md-3">
          <img src="https://images.unsplash.com/photo-1570773222236-63d3a7f11b50?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid mb-2">
          <h6 class="mb-0">EcoImpacto</h6>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection

