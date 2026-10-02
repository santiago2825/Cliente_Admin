@extends('layout.app')
@section('content')
    <div class="container py-5">
        <!-- Bienvenida -->
        <div class="text-center mb-5">
            <h1 class="fw-bold text-success display-5">
                Bienvenido a admin SENA
            </h1>
            <p class="lead text-muted">
                Sistema de Gestión para el Servicio Nacional de Aprendizaje - SENA.
            </p>
        </div>

        <!-- Carrusel -->
        <div id="carouselSena" class="carousel slide shadow rounded-4 overflow-hidden mb-5">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/imagen1.jpg') }}" class="d-block w-100" style="height:500px; object-fit:cover;" alt="SENA 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/imagen2.jpeg') }}" class="d-block w-100" style="height:500px; object-fit:cover;" alt="SENA 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/imagen3.jpg') }}" class="d-block w-100" style="height:500px; object-fit:cover;" alt="SENA 3">
                </div>
            </div>
            <!-- Botón anterior -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselSena" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-3"></span>
            </button>
            <!-- Botón siguiente -->
            <button class="carousel-control-next" type="button" data-bs-target="#carouselSena" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-3"></span>
            </button>
        </div>
    </div>
@endsection