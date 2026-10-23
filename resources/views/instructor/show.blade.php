@extends('layout.app')
@section('content')
    <div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                <!-- Encabezado -->
                <div class="card-header bg-success text-white text-center fw-bold fs-5 py-3 border-0">
                    <i class="fas fa-id-card me-2"></i>Información del Instructor
                </div>

                <div class="card-body p-4 bg-white">
                    <!-- Nombre del Instructor -->
                    <div class="mb-4">
                        <span class="text-secondary small text-uppercase fw-bold d-block mb-1">
                            <i class="fas fa-user text-success me-1"></i> Nombre Completo
                        </span>
                        <div class="p-3 bg-light rounded-3 text-dark fw-semibold border-start border-success border-4">
                            {{ $teacher['name'] }}
                        </div>
                    </div>

                    <!-- Correo Electrónico -->
                    <div class="mb-4">
                        <span class="text-secondary small text-uppercase fw-bold d-block mb-1">
                            <i class="fas fa-envelope text-success me-1"></i> Correo Electrónico
                        </span>
                        <div class="p-3 bg-light rounded-3 text-dark fw-semibold border-start border-success border-4">
                            {{ $teacher['email'] }}
                        </div>
                    </div>

                    <!-- Número de Documento -->
                    <div class="mb-4">
                        <span class="text-secondary small text-uppercase fw-bold d-block mb-1">
                            <i class="fas fa-address-card text-success me-1"></i> Número de Documento
                        </span>
                        <div class="p-3 bg-light rounded-3 text-dark fw-semibold border-start border-success border-4">
                            {{ $teacher['document'] }}
                        </div>
                    </div>

                    <hr class="my-4 border-light-subtle">

                    <!-- Botones de Acción -->
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('profesor.index') }}" class="btn btn-outline-secondary rounded-pill px-4 fw-semibold shadow-sm">
                            <i class="fas fa-arrow-left me-1"></i> Volver al listado
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection