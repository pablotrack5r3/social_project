@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row g-2">
            <div class="col-8 lc-block border-3 border border-light">
                <img class="h-100 img-fluid img-hover-zoom" style="object-fit:cover" src="https://images.unsplash.com/photo-1734174050925-3dca7c6bbad1?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="768" alt="Photo by Randall  Ruiz" loading="lazy">
            </div>
            <div class="col-4 lc-block border-3 border border-light">
                <img class="h-100 img-fluid img-hover-zoom" style="object-fit:cover" src="https://images.unsplash.com/photo-1666322270788-087654a61400?q=80&w=774&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="" alt="Photo by Dylan Shaw" loading="lazy">
            </div>
        </div>
        <div class="row g-0 ">
            <div class="col-4 lc-block border-3 border border-light">
                <img class="h-100 img-fluid img-hover-zoom" style="object-fit:cover" src="https://plus.unsplash.com/premium_photo-1682310522369-80e6cd96849a?q=80&w=1870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="" alt="Photo by Lightscape" loading="lazy">
            </div>
            <div class="col-8 lc-block border-3 border border-light">
                <img class="h-100 img-fluid img-hover-zoom" style="object-fit:cover" src="https://images.unsplash.com/photo-1728584388081-819a78aa30ae?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" sizes="(max-width: 1080px) 100vw, 1080px" width="1080" height="768" alt="Photo by Hitoshi Namura" loading="lazy">
            </div>
        </div>
    </div>
@endsection

<style>
.img-hover-zoom {
  transition: transform 0.3s ease;
}

.img-hover-zoom:hover {
  transform: scale(1.05);
  cursor: pointer;
}
</style>
