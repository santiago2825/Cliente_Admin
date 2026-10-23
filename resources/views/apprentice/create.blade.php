@extends('layout.app')
@section('content')
    <div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card border-0 shadow rounded-4">
                <div class="card-header bg-success text-white text-center fw-bold fs-4">
                    Nuevo Aprendiz
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('apprentice.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Nombre
                            </label>
                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                placeholder="Ingrese el nombre del aprendiz"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Documento de Identidad
                            </label>
                            <input
                                type="text"
                                name="document"
                                class="form-control"
                                placeholder="Ingrese el número de documento">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Correo Electrónico
                            </label>
                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                placeholder="Ingrese el correo electrónico">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Número de Teléfono
                            </label>
                            <input
                                type="number"
                                name="cell_number"
                                class="form-control"
                                placeholder="Ingrese el número de teléfono">
                        </div>

                        <div class="mb-3">
                            <label for="course_id" class="form-label fw-semibold">
                                Curso
                            </label>
                            <select name="course_id" id="course_id" class="form-select" required>
                                <option value="">Seleccione un curso</option>
                                @foreach($courses as $course)
                                    <option value="{{ $course['id'] }}">
                                        {{ $course['course_number'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('apprentice.index') }}"
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