@extends('layout.app')
@section('content')
    <div class="container py-5">
    <!-- Botón para regresar -->
    <div class="mb-4">
        <a href="{{ route('oferta.index') }}" class="btn btn-outline-secondary rounded-pill px-3 shadow-sm btn-sm fw-semibold">
            <i class="fas fa-arrow-left me-1"></i> Volver a la lista
        </a>
    </div>

    <!-- Tarjeta del Formulario -->
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-7">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                <div class="card-header bg-success text-white py-3">
                    <h4 class="mb-0 fw-bold d-flex align-items-center gap-2">
                        <i class="fas fa-pen-to-square"></i> Editar Oferta
                    </h4>
                </div>
                
                <div class="card-body p-4">
                    <form action="{{ route('oferta.update', $offer['id']) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Descripción -->
                        <div class="mb-3">
                            <label for="description" class="form-label fw-semibold text-dark">Descripción</label>
                            <textarea name="description" id="description" rows="3" 
                                    class="form-control shadow-none @error('description') is-invalid @enderror" 
                                    placeholder="Ingrese la descripción de la oferta" required>{{ old('description', $offer['description']) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Estado (Booleano) -->
                        <div class="mb-3">
                            <label for="state" class="form-label fw-semibold text-dark">Estado</label>
                            <select name="state" id="state" class="form-select shadow-none @error('state') is-invalid @enderror" required>
                                <option value="1" {{ old('state', $offer['state']) == 1 || old('state', $offer['state']) === true ? 'selected' : '' }}>
                                    Activo
                                </option>
                                <option value="0" {{ old('state', $offer['state']) == 0 || old('state', $offer['state']) === false ? 'selected' : '' }}>
                                    Inactivo
                                </option>
                            </select>
                            @error('state')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Fechas -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="start_date" class="form-label fw-semibold text-dark">Fecha de Inicio</label>
                                <input type="date" name="start_date" id="start_date" 
                                    class="form-control shadow-none @error('start_date') is-invalid @enderror" 
                                    value="{{ old('start_date', $offer['start_date']) }}" required>
                                @error('start_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-4">
                                <label for="end_date" class="form-label fw-semibold text-dark">Fecha Final</label>
                                <input type="date" name="end_date" id="end_date" 
                                    class="form-control shadow-none @error('end_date') is-invalid @enderror" 
                                    value="{{ old('end_date', $offer['end_date']) }}" required>
                                @error('end_date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Botones de Acción -->
                        <div class="d-flex justify-content-end gap-2 pt-2 border-top">
                            <a href="{{ route('oferta.index') }}" class="btn btn-light border rounded-pill px-4 fw-semibold">
                                Cancelar
                            </a>
                            <button type="submit" class="btn btn-success rounded-pill px-4 shadow-sm fw-semibold">
                                <i class="fas fa-save me-1"></i> Guardar Cambios
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .form-control:focus, .form-select:focus {
        border-color: #198754;
        box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
    }
</style>
@endsection