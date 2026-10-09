@extends('layout.app')
@section('content')
    <div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow rounded-4">
                <div class="card-header bg-success text-white text-center fw-bold fs-4">
                    Nuevo Centro de Formación
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('centros.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Nombre
                            </label>
                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                placeholder="Ingrese el nombre del centro"
                                required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold">
                                Ubicación
                            </label>
                            <input
                                type="text"
                                name="location"
                                class="form-control"
                                placeholder="Ingrese la ubicación"
                                required>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('centros.index') }}"
                                class="btn btn-secondary rounded-pill px-4">
                                Cancelar
                            </a>
                            <button
                                type="submit"
                                class="btn btn-success rounded-pill px-4">
                                <i class="fas fa-save me-1"></i>
                                Guardar
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection