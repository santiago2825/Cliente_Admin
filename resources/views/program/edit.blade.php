@extends('layout.app')
@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                    <!-- Encabezado en Verde Principal -->
                    <div class="card-header bg-success text-white text-center fw-bold fs-4 py-3 border-0">
                        Editar programa
                    </div>

                    <div class="card-body p-4 bg-white">
                        <form action="{{ route('program.update', $program['id']) }}" method="POST">
                            @csrf
                            @method('PUT')

                            {{-- Nombre --}}
                            <div class="mb-3">
                                <label class="form-label text-success-dark fw-bold" for="name">
                                    Nombre
                                </label>
                                <input type="text" name="name" id="name" class="form-control custom-input"
                                    value="{{ old('name', $program['name']) }}"
                                    placeholder="Ingrese el nombre del programa" required>
                            </div>

                            {{-- Nivel de Formación --}}
                            <div class="mb-3">
                                <label class="form-label text-success-dark fw-bold" for="level">
                                    Nivel de formación
                                </label>
                                <select name="level" id="level" class="form-select custom-input" required>
                                    <option value="" disabled>Seleccione su nivel</option>
                                    <option value="tecnico" {{ old('level', $program['level']) == 'tecnico' ? 'selected' : '' }}>
                                        Técnico
                                    </option>
                                    <option value="tecnologo" {{ old('level', $program['level']) == 'tecnologo' ? 'selected' : '' }}>
                                        Tecnólogo
                                    </option>
                                    <option value="curso_bilinguismo" {{ old('level', $program['level']) == 'curso_bilinguismo' ? 'selected' : '' }}>
                                        Curso Bilingüismo
                                    </option>
                                </select>
                            </div>

                            {{-- Modalidad de Formación --}}
                            <div class="mb-3">
                                <label class="form-label text-success-dark fw-bold" for="mode">
                                    Modalidad de formación
                                </label>
                                <select name="mode" id="mode" class="form-select custom-input" required>
                                    <option value="" disabled>Seleccione la modalidad</option>
                                    <option value="presencial" {{ old('mode', $program['mode']) == 'presencial' ? 'selected' : '' }}>
                                        Presencial
                                    </option>
                                    <option value="virtual" {{ old('mode', $program['mode']) == 'virtual' ? 'selected' : '' }}>
                                        Virtual
                                    </option>
                                    <option value="hibrida" {{ old('mode', $program['mode']) == 'hibrida' ? 'selected' : '' }}>
                                        Híbrida / Mixta
                                    </option>
                                </select>
                            </div>

                            {{-- Fechas --}}
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label text-success-dark fw-bold" for="start_date">
                                        Fecha de inicio
                                    </label>
                                    <input type="date" name="start_date" id="start_date" class="form-control custom-input"
                                        value="{{ old('start_date', $program['start_date']) }}" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label text-success-dark fw-bold" for="end_date">
                                        Fecha final
                                    </label>
                                    <input type="date" name="end_date" id="end_date" class="form-control custom-input"
                                        value="{{ old('end_date', $program['end_date']) }}" required>
                                </div>
                            </div>

                            {{-- Centro de Formación --}}
                            <div class="mb-4">
                                <label for="training_center_id" class="form-label text-success-dark fw-bold">
                                    Centro de formación
                                </label>
                                <select name="training_center_id" id="training_center_id" class="form-select custom-input" required>
                                    <option value="">Seleccione un centro</option>
                                    @foreach ($centros as $training_center)
                                        <option value="{{ $training_center['id'] }}"
                                            {{ old('training_center_id', $program['training_center_id']) == $training_center['id'] ? 'selected' : '' }}>
                                            {{ $training_center['name'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- ofertas--}}
                            <div class="mb-4">
                                <label for="offer_id" class="form-label text-success-dark fw-bold">
                                    ofertas
                                </label>
                                <select name="offer_id" id="offer_id" class="form-select custom-input" required>
                                    <option value="">Seleccione una oferta</option>
                                    @foreach ($offers as $offer)
                                        <option value="{{ $offer['id'] }}"
                                            {{ old('offer_id', $program['offer_id']) == $offer['id']? 'selected' : '' }}>
                                            {{ $offer['description'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <hr class="my-4 border-success-subtle">

                            {{-- Botones de Acción --}}
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('program.index') }}" class="btn btn-outline-success rounded-pill px-4 fw-semibold">
                                    Cancelar
                                </a>
                                <button type="submit" class="btn btn-success rounded-pill px-4 fw-bold shadow-sm">
                                    <i class="fas fa-sync-alt me-1"></i>
                                    Actualizar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<style>
    /* Color de texto principal */
    .text-success-dark {
        color: #0f5132;
    }

    /* Borde verde tenue para separadores */
    .border-success-subtle {
        border-color: #d1e7dd !important;
    }

    /* Estilos e interacción de los inputs y selects */
    .custom-input {
        border-color: #bcd0c7;
        transition: all 0.2s ease-in-out;
    }

    .custom-input:focus {
        border-color: #198754;
        box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
    }

    /* Botón cancelar */
    .btn-outline-success:hover {
        background-color: #198754;
        color: #ffffff;
    }

    /* Botón de envío */
    .btn-success {
        background-color: #198754;
        border-color: #198754;
    }

    .btn-success:hover {
        background-color: #146c43;
        border-color: #13653f;
    }
</style>
@endsection