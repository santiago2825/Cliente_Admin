@extends('layout.app')
@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                    <!-- Encabezado en Verde Principal -->
                    <div class="card-header bg-success text-white text-center fw-bold fs-4 py-3 border-0">
                        Crear nueva oerfta
                    </div>

                    <div class="card-body p-4 bg-white">
                        <form action="{{ route('oferta.store') }}" method="POST">
                            @csrf

                            {{-- Nombre del Ambiente --}}
                            <div class="mb-3">
                                <label class="form-label text-success-dark fw-bold" for="nombre">
                                    descripcion
                                </label>
                                <input type="text" name="description" id="descripcion" class="form-control custom-input"
                                    placeholder="Ej: oferta para ...." required>
                            </div>

                            {{-- estado --}}

                            <!-- Estado -->
                            <div class="mb-3">
                                <label for="state" class="form-label fw-semibold text-dark">Estado</label>
                                <select name="state" id="state"
                                    class="form-select shadow-none @error('state') is-invalid @enderror" required>
                                    <option value="1" {{ old('state', $offer['state'] ?? 1) == 1 ? 'selected' : '' }}>
                                        Activo</option>
                                    <option value="0" {{ old('state', $offer['state'] ?? 1) == 0 ? 'selected' : '' }}>
                                        Inactivo</option>
                                </select>
                                @error('state')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- fechas --}}
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-semibold" for="start_date">
                                        Fecha de inicio
                                    </label>
                                    <input type="date" name="start_date" id="start_date" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-semibold" for="end_date">
                                        Fecha final
                                    </label>
                                    <input type="date" name="end_date" id="end_date" class="form-control" required>
                                </div>
                            </div>

                            <hr class="my-4 border-success-subtle">

                            {{-- Botones de Acción --}}
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('oferta.index') }}"
                                    class="btn btn-outline-success rounded-pill px-4 fw-semibold">
                                    Cancelar
                                </a>
                                <button type="submit" class="btn btn-success rounded-pill px-4 fw-bold shadow-sm">
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