@extends('layout.app')
@section('content')
    <div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-7">

            <div class="card border-0 shadow rounded-4">

                <div class="card-header bg-success text-white text-center fw-bold fs-4">
                    Actualizar Aprendiz
                </div>

                <div class="card-body p-4">

                    <form action="{{ route('apprentice.update', $apprentice) }}" method="POST">

                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Nombre
                            </label>

                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                value="{{ old('name', $apprentice['name']) }}"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Correo Electrónico
                            </label>

                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                value="{{ old('email', $apprentice['email']) }}"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Número de Teléfono
                            </label>

                            <input
                                type="number"
                                name="cell_number"
                                class="form-control"
                                value="{{ old('cell_number', $apprentice['cell_number']) }}"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Curso
                            </label>

                            <select name="course_id" class="form-select" required>

                                <option value="">Seleccionar curso</option>

                                @foreach ($courses as $course)

                                    <option value="{{ $course['id']}}"
                                        {{ old('course_id', $apprentice['course_id']) == $course['id'] ? 'selected' : '' }}>

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
                                Actualizar

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>
@endsection