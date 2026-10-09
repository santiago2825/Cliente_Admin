@extends('layout.app')
@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-success text-white text-center">
                        <h3 class="mb-0">Información del Área</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label fw-bold">ID</label>
                            <input
                                type="text"
                                class="form-control"
                                value="{{ $area['id'] }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nombre del Área</label>
                            <input
                                type="text"
                                class="form-control"
                                value="{{ $area ['name'] }}"
                                readonly>
                        </div>
                        <div class="d-flex justify-content-center gap-2 mt-4">
                            <a href="{{ route('areas.index') }}" class="btn btn-outline-success">
                                Volver
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection