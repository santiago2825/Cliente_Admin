@extends('layout.app')
@section('content')
    <div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card border-0 shadow rounded-4">

                <div class="card-header bg-success text-white text-center fw-bold fs-4">
                    Actualizar Computador
                </div>

                <div class="card-body p-4">

                    <form action="{{ route('computer.update', $computer) }}" method="POST">

                        @csrf
                        @method('PUT')

                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Número de Serie
                            </label>

                            <input
                                type="number"
                                name="number"
                                class="form-control"
                                value="{{ old('number', $computer['number']) }}"
                                placeholder="Ingrese el número de serie"
                                required>

                        </div>

                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Marca
                            </label>

                            <input
                                type="text"
                                name="brand"
                                class="form-control"
                                value="{{ old('brand', $computer['brand']) }}"
                                placeholder="Ingrese la marca"
                                required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold">
                                Ambiente
                            </label>
                            <select name="environment_id" class="form-control" required>
                                <option value="">Seleccione un ambiente</option>
                                @foreach ($environments as $environment)
                                    <option value="{{ $environment['id'] }}" {{ old('environment_id', $computer['environment_id']) == $environment['id'] ? 'selected' : '' }}>
                                        {{ $environment['name'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('computer.index') }}"
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