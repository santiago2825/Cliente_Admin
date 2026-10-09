@extends('layout.app')
@section('content')
    <div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow rounded-4">
                <div class="card-header bg-success text-white text-center fw-bold fs-4">
                    Nueva Área
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('areas.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label class="form-label fw-semibold">
                                Nombre del Área
                            </label>
                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                placeholder="Ingrese el nombre del área"
                                required>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('areas.index') }}"
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