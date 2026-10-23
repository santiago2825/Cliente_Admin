@extends('layout.app')
@section('content')
        <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                    <!-- Encabezado con Verde Verde Principal -->
                    <div class="card-header bg-success text-white text-center fw-bold fs-5 py-3 border-0">
                        <i class="fas fa-graduation-cap me-2"></i>Detalles del programa
                    </div>
                    
                    <div class="card-body p-4 bg-white">
                        
                        {{-- Nombre del Programa --}}
                        <div class="mb-4 p-3 bg-light rounded-3 border-start border-4 border-success">
                            <label class="text-success small text-uppercase fw-bold d-block mb-1">
                                Nombre del programa
                            </label>
                            <span class="fs-5 fw-bold text-dark">
                                {{ $program['name'] }}
                            </span>
                        </div>

                        {{-- Nivel y Modalidad --}}
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-secondary small text-uppercase fw-bold d-block mb-1">
                                    Nivel de formación
                                </label>
                                @switch($program['level'])
                                    @case('tecnico')
                                        <span class="badge badge-green-subtle px-3 py-2 rounded-pill fs-6 fw-semibold">Técnico</span>
                                        @break
                                    @case('tecnologo')
                                        <span class="badge badge-green-subtle px-3 py-2 rounded-pill fs-6 fw-semibold">Tecnólogo</span>
                                        @break
                                    @case('curso_bilinguismo')
                                        <span class="badge badge-green-subtle px-3 py-2 rounded-pill fs-6 fw-semibold">Curso Bilingüismo</span>
                                        @break
                                    @default
                                        <span class="badge badge-green-subtle px-3 py-2 rounded-pill fs-6 fw-semibold">{{ ucfirst($program['level']) }}</span>
                                @endswitch
                            </div>

                            <div class="col-md-6">
                                <label class="text-secondary small text-uppercase fw-bold d-block mb-1">
                                    Modalidad
                                </label>
                                <span class="badge badge-green-subtle px-3 py-2 rounded-pill fs-6 fw-semibold">
                                    {{ ucfirst($program['mode']) }}
                                </span>
                            </div>
                        </div>

                        {{-- Fechas --}}
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-secondary small text-uppercase fw-bold d-block mb-1">
                                    Fecha de inicio
                                </label>
                                <span class="fw-semibold text-dark">
                                    <i class="far fa-calendar-alt me-1 text-success"></i>
                                    {{ \Carbon\Carbon::parse($program['start_date'])->format('d/m/Y') }}
                                </span>
                            </div>
                            <div class="col-md-6">
                                <label class="text-secondary small text-uppercase fw-bold d-block mb-1">
                                    Fecha final
                                </label>
                                <span class="fw-semibold text-dark">
                                    <i class="far fa-calendar-check me-1 text-success"></i>
                                    {{ \Carbon\Carbon::parse($program['end_date'])->format('d/m/Y') }}
                                </span>
                            </div>
                        </div>

                        {{-- Centro de Formación y Oferta --}}
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-secondary small text-uppercase fw-bold d-block mb-1">
                                    Centro de formación
                                </label>
                                <span class="fw-semibold text-dark">
                                    <i class="fas fa-building me-1 text-success"></i>
                                    {{ $program['training_center']['name'] ?? 'No asignado' }}
                                </span>
                            </div>

                            <div class="col-md-6">
                                <label class="text-secondary small text-uppercase fw-bold d-block mb-1">
                                    Oferta
                                </label>
                                <span class="fw-semibold text-dark">
                                    <i class="fas fa-tag me-1 text-success"></i>
                                    {{ $program['offer']['description'] ?? 'No asignada' }}
                                </span>
                            </div>
                        </div>

                        <hr class="my-4 border-light-subtle">

                        {{-- Botón de Acción --}}
                        <div class="d-flex justify-content-start">
                            <a href="{{ route('program.index') }}" class="btn btn-outline-success rounded-pill px-4 fw-semibold shadow-sm">
                                <i class="fas fa-arrow-left me-1"></i> Volver
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<style>
    /* Badge suave con acento verde */
    .badge-green-subtle {
        background-color: #e8f5e9;
        color: #1b5e20;
        border: 1px solid #c8e6c9;
    }

    /* Transición suave para el botón */
    .btn-outline-success:hover {
        background-color: #198754;
        color: #ffffff;
    }
</style>
@endsection