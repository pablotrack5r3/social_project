@extends('layouts.app')

@section('content')
    <div class="bg-light">
        @include('components.main')
        @include('components.mision-vision')
        @include('components.cta-botones')
        @include('components.barra-impacto')
    </div>
@endsection

