@extends('layout.app')
@section('content')
        <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                    <!-- Encabezado -->
                    <div class="card-header bg-success text-white text-center fw-bold fs-5 py-3 border-0">
                        <i class="fas fa-chalkboard-teacher me-2"></i>Información del Curso
                    </div>

                    <div class="card-body p-4 bg-white">

                        {{-- Número de curso --}}
                        <div class="mb-4 p-3 bg-light rounded-3 border-start border-4 border-success">
                            <label class="text-success small text-uppercase fw-bold d-block mb-1">
                                Número de Curso
                            </label>
                            <span class="fs-5 fw-bold text-dark">
                                {{ $course['course_number'] }}
                            </span>
                        </div>

                        {{-- Fecha --}}
                        <div class="mb-4">
                            <label class="text-secondary small text-uppercase fw-bold d-block mb-1">
                                Fecha
                            </label>
                            <span class="fw-semibold text-dark">
                                <i class="far fa-calendar-alt me-1 text-success"></i>
                                {{ \Carbon\Carbon::parse($course['day'])->format('d/m/Y') }}
                            </span>
                        </div>

                        {{-- Programa y Ambiente en dos columnas --}}
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-secondary small text-uppercase fw-bold d-block mb-1">
                                    Programa
                                </label>
                                <span class="fw-semibold text-dark">
                                    <i class="fas fa-graduation-cap me-1 text-success"></i>
                                    {{ $course['program']['name'] ?? 'No asignado' }}
                                </span>
                            </div>

                            <div class="col-md-6">
                                <label class="text-secondary small text-uppercase fw-bold d-block mb-1">
                                    Ambiente
                                </label>
                                <span class="fw-semibold text-dark">
                                    <i class="fas fa-door-open me-1 text-success"></i>
                                    {{ $course['environment']['name'] ?? 'No asignado' }}
                                </span>
                            </div>
                        </div>

                        <hr class="my-4 border-light-subtle">

                        {{-- Botón Volver --}}
                        <div class="d-flex justify-content-start">
                            <a href="{{ route('course.index') }}"
                                class="btn btn-outline-success rounded-pill px-4 fw-semibold shadow-sm">
                                <i class="fas fa-arrow-left me-1"></i> Volver
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .btn-outline-success:hover {
            background-color: #198754;
            color: #ffffff;
        }
    </style>
@endsection