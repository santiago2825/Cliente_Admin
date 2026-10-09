@extends('layout.app')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow border-success">
                    <div class="card-header bg-success text-white text-center">
                        <h2 class="mb-0">Información del Centro de Formación</h2>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nombre</label>
                            <input
                                type="text"
                                class="form-control"
                                value="{{ $centro['name'] }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Ubicación</label>
                            <input
                                type="text"
                                class="form-control"
                                value="{{ $centro['location'] }}"
                                readonly>
                        </div>
                        <div class="d-flex justify-content-center gap-2 mt-4">
                            <a href="{{ route('centros.index') }}" class="btn btn-outline-success">
                                Volver
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection