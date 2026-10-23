@extends('layout.app')
@section('content')
    <div class="container py-5">

        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card border-0 shadow rounded-4">
                    <div class="card-header bg-success text-white text-center fw-bold fs-4">
                        Nuevo programa
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('program.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label fw-semibold">
                                    Nombre
                                </label>
                                <input type="text" name="name" class="form-control"
                                    placeholder="Ingrese el nombre del programa" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold" for="level">
                                    Nivel de formación
                                </label>
                                <select name="level" id="level" class="form-select" required>
                                    <option value="" selected disabled>Seleccione su nivel</option>
                                    <option value="tecnico">Técnico</option>
                                    <option value="tecnologo">Tecnólogo</option>
                                    <option value="curso_bilinguismo">Curso Bilingüismo</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold" for="mode">
                                    Modalidad de formación
                                </label>
                                <select name="mode" id="mode" class="form-select" required>
                                    <option value="" selected disabled>Seleccione su modalidad</option>
                                    <option value="presencial">Presencial</option>
                                    <option value="virtual">Virtual</option>
                                    <option value="hibrida">Híbrida / Mixta</option>
                                </select>
                            </div>


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
                            <div class="mb-4">
                                <label for="training_center_id" class="form-label fw-semibold">
                                    Centro de formación
                                </label>
                                <!-- CORREGIDO: name="training_center_id" e id="training_center_id" -->
                                <select name="training_center_id" id="training_center_id" class="form-select" required>
                                    <option value="">Seleccione un centro</option>
                                    @foreach ($centros as $training_center)
                                        <option value="{{ $training_center['id'] }}">
                                            {{ $training_center['name'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="offer_id" class="form-label fw-semibold">
                                    ofertas
                                </label>
                                <!-- ofertas -->
                                <select name="offer_id" id="offer_id" class="form-select" required>
                                    <option value="">Seleccione un centro</option>
                                    @foreach ($offers as $offer)
                                        <option value="{{ $offer['id'] }}">
                                            {{ $offer['description'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('program.index') }}" class="btn btn-secondary rounded-pill px-4">
                                    Cancelar
                                </a>
                                <button type="submit" class="btn btn-success rounded-pill px-4">
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