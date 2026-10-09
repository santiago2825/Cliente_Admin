@extends('layout.app')
@section('content')
    <div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card border-0 shadow rounded-4">

                <div class="card-header bg-success text-white text-center fw-bold fs-4">
                    Actualizar Centro de Formación
                </div>

                <div class="card-body p-4">

                    <form action="{{ route('centros.update', $centro) }}" method="POST">

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
                                value="{{ old('name', $centro['name']) }}"
                                placeholder="Ingrese el nombre del centro"
                                required>

                        </div>

                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Dirección
                            </label>

                            <input
                                type="text"
                                name="location"
                                class="form-control"
                                value="{{ old('location', $centro['location']) }}"
                                placeholder="Ingrese la dirección"
                                required>

                        </div>

                        <div class="d-flex justify-content-between">

                            <a href="{{ route('centros.index') }}"
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