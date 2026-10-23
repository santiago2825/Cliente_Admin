@extends('layout.app')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow border-success">
                    <div class="card-header bg-success text-white text-center">
                        <h2 class="mb-0">Información del Equipo</h2>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Número</label>
                            <input
                                type="number"
                                class="form-control"
                                value="{{ $computer['number']}}"
                                readonly>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label fw-bold">Marca</label>
                            <input
                                type="text"
                                class="form-control"
                                value="{{ $computer['brand'] }}"
                                readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Ambiente</label>
                            <input
                                type="text"
                                class="form-control"
                                value="{{ $computer['environment']['name'] ?? 'No asignado' }}"
                                readonly>
                        </div>

                        <div class="d-flex justify-content-center gap-2 mt-4">
                            <a href="{{ route('computer.index') }}" class="btn btn-outline-success">
                                Volver
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection