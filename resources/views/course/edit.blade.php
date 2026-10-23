@extends('layout.app')
@section('content')
    <div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-7">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                <!-- Encabezado con Verde Principal -->
                <div class="card-header bg-success text-white text-center fw-bold fs-5 py-3 border-0">
                    <i class="fas fa-edit me-2"></i>Actualizar curso
                </div>

                <div class="card-body p-4 bg-white">
                    <form action="{{ route('course.update', $course) }}" method="POST">
                        @csrf
                        @method('PUT')

                        {{-- Fila para Número de Curso y Fecha --}}
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="form-label text-secondary small text-uppercase fw-bold mb-1">
                                    <i class="fas fa-hashtag text-success me-1"></i> Número de curso / Ficha
                                </label>
                                <input
                                    type="number"
                                    name="course_number"
                                    class="form-control @error('course_number') is-invalid @enderror"
                                    value="{{ old('course_number', $course['course_number']) }}"
                                    placeholder="Ingrese el número"
                                    required>
                                @error('course_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label text-secondary small text-uppercase fw-bold mb-1">
                                    <i class="far fa-calendar-alt text-success me-1"></i> Fecha
                                </label>
                                <input
                                    type="date"
                                    name="day"
                                    class="form-control @error('day') is-invalid @enderror"
                                    value="{{ old('day', $course['day']) }}"
                                    required>
                                @error('day')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- Programa de Formación --}}
                        <div class="mb-3">
                            <label class="form-label text-secondary small text-uppercase fw-bold mb-1">
                                <i class="fas fa-graduation-cap text-success me-1"></i> Programa de formación
                            </label>
                            <select name="program_id" class="form-select @error('program_id') is-invalid @enderror" required>
                                <option value="">Seleccionar programa</option>
                                @foreach ($programs as $program)
                                    <option value="{{ $program['id'] }}"
                                        {{ old('program_id', $course['program_id']) == $program['id'] ? 'selected' : '' }}>
                                        {{ $program['name'] }}
                                    </option>
                                @endforeach
                            </select>
                            @error('program_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Ambiente --}}
                        <div class="mb-4">
                            <label class="form-label text-secondary small text-uppercase fw-bold mb-1">
                                <i class="fas fa-door-open text-success me-1"></i> Ambiente
                            </label>
                            <select name="environment_id" class="form-select @error('environment_id') is-invalid @enderror" required>
                                <option value="">Seleccionar ambiente</option>
                                @foreach ($environments as $environment)
                                    <option value="{{ $environment['id'] }}"
                                        {{ old('environment_id', $course['environment_id']) == $environment['id'] ? 'selected' : '' }}>
                                        {{ $environment['name'] }}
                                    </option>
                                @endforeach
                            </select>
                            @error('environment_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <hr class="my-4 border-light-subtle">

                        {{-- Botones de Acción --}}
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('course.index') }}" class="btn btn-outline-secondary rounded-pill px-4 fw-semibold shadow-sm">
                                <i class="fas fa-arrow-left me-1"></i> Cancelar
                            </a>

                            <button type="submit" class="btn btn-success rounded-pill px-4 fw-semibold shadow-sm">
                                <i class="fas fa-save me-1"></i> Actualizar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Efecto hover suave en los inputs */
    .form-control:focus, .form-select:focus {
        border-color: #198754;
        box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
    }

    .btn-success {
        background-color: #198754;
        border-color: #198754;
    }
</style>
@endsection