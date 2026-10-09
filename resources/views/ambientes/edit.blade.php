@extends('layout.app')
@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                    <!-- Encabezado en Verde Principal -->
                    <div class="card-header bg-success text-white text-center fw-bold fs-4 py-3 border-0">
                        Editar ambiente
                    </div>

                    <div class="card-body p-4 bg-white">
                        <form action="{{ route('ambientes.update', $ambiente) }}" method="POST">
                            @csrf
                            @method('PUT')

                            {{-- Nombre del Ambiente --}}
                            <div class="mb-3">
                                <label class="form-label text-success-dark fw-bold" for="nombre">
                                    Nombre del ambiente
                                </label>
                                <input type="text" name="name" id="nombre" class="form-control custom-input"
                                    value="{{ old('nombre', $ambiente['name']) }}" placeholder="Ej: Lab de Redes, Aula 102"
                                    required>
                            </div>

                            {{-- Ubicación --}}
                            <div class="mb-3">
                                <label class="form-label text-success-dark fw-bold" for="ubicacion">
                                    Ubicación
                                </label>
                                <input type="text" name="location" id="ubicacion" class="form-control custom-input"
                                    value="{{ old('ubicacion', $ambiente['location']) }}" placeholder="Ej: Piso 2, Bloque B"
                                    required>
                            </div>

                            {{-- Centro de Formación --}}
                            <div class="mb-4">
                                <label for="centro_id" class="form-label text-success-dark fw-bold">
                                    Centro de formación
                                </label>
                                <select name="training_center_id" id="training_center_id" class="form-select custom-input"
                                    required>
                                    <option value="" disabled>Seleccione un centro</option>
                                    @foreach ($centros as $centro)
                                        <option value="{{ $centro['id'] }}"
                                            {{ isset($ambiente['training_center_id']) && $ambiente['training_center_id'] == $centro['id'] ? 'selected' : '' }}>
                                            {{ $centro['name'] ?? '' }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <hr class="my-4 border-success-subtle">

                            {{-- Botones de Acción --}}
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('ambientes.index') }}"
                                    class="btn btn-outline-success rounded-pill px-4 fw-semibold">
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
