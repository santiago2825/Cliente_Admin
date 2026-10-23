@extends('layout.app')
@section('content')
    <div class="container py-5">
    <!-- Tarjeta de Detalle -->
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-7">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                <div class="card-header bg-success text-white py-3 d-flex justify-content-between align-items-center">
                    <h4 class="mb-0 fw-bold d-flex align-items-center gap-2">
                        <i class="fas fa-eye"></i> Detalle de la Oferta
                    </h4>
                    <span class="badge bg-white text-success fw-bold px-3 py-2 rounded-pill">
                        ID: #{{ $offer['id'] }}
                    </span>
                </div>
                
                <div class="card-body p-4">
                    <!-- Descripción -->
                    <div class="mb-4">
                        <label class="text-muted small fw-bold text-uppercase d-block mb-1">Descripción</label>
                        <div class="p-3 bg-light rounded-3 text-dark fw-semibold border">
                            {{ $offer['description'] }}
                        </div>
                    </div>

                    <div class="row g-3 mb-4">
                        <!-- Estado (Booleano evaluado a texto) -->
                        <div class="col-md-4">
                            <label class="text-muted small fw-bold text-uppercase d-block mb-1">Estado</label>
                            <div>
                                @if($offer['state'])
                                    <span class="badge bg-success-subtle text-success border border-success px-3 py-2 rounded-pill fw-bold">
                                        <i class="fas fa-circle-check me-1"></i> Activo
                                    </span>
                                @else
                                    <span class="badge bg-danger-subtle text-danger border border-danger px-3 py-2 rounded-pill fw-bold">
                                        <i class="fas fa-circle-xmark me-1"></i> Inactivo
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Fecha de Inicio -->
                        <div class="col-md-4">
                            <label class="text-muted small fw-bold text-uppercase d-block mb-1">Fecha de Inicio</label>
                            <p class="mb-0 fw-semibold text-secondary">
                                <i class="fas fa-calendar-day text-success me-1"></i> {{ $offer['start_date'] }}
                            </p>
                        </div>

                        <!-- Fecha Final -->
                        <div class="col-md-4">
                            <label class="text-muted small fw-bold text-uppercase d-block mb-1">Fecha Final</label>
                            <p class="mb-0 fw-semibold text-secondary">
                                <i class="fas fa-calendar-check text-success me-1"></i> {{ $offer['end_date'] }}
                            </p>
                        </div>
                    </div>

                    <!-- Botón Volver al final -->
                    <div class="d-flex justify-content-end pt-3 border-top">
                        <a href="{{ route('oferta.index') }}" class="btn btn-outline-secondary rounded-pill px-4 fw-semibold shadow-sm">
                            <i class="fas fa-arrow-left me-1"></i> Volver a la lista
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection