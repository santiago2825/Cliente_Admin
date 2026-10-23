@extends('layout.app')
@section('content')
    <div class="container py-5">

    <div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card shadow">

            <div class="card-header bg-success text-white text-center">
                <h2 class="mb-0">Información del Aprendiz</h2>
            </div>

            <div class="card-body">

                <div class="mb-3">
                    <label class="form-label fw-bold">Nombre</label>
                    <input
                        type="text"
                        class="form-control"
                        value="{{ $apprentice['name'] ?? '' }}"
                        readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Correo Electrónico</label>
                    <input
                        type="email"
                        class="form-control"
                        value="{{ $apprentice['email'] ?? '' }}"
                        readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Número de Teléfono</label>
                    <input
                        type="text"
                        class="form-control"
                        value="{{ $apprentice['cell_number'] ?? '' }}"
                        readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Curso</label>
                    <input
                        type="text"
                        class="form-control"
                        value="{{ $apprentice['course']['course_number'] ?? 'No asignado' }}"
                        readonly>
                </div>
                <div class="text-center mt-4">
                    <a href="{{ route('apprentice.index') }}" class="btn btn-outline-success me-2">
                        Volver
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection