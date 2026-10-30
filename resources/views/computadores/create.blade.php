@extends('layout.app')
@section('content')
    <div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card border-0 shadow rounded-4">

                <div class="card-header bg-success text-white text-center fw-bold fs-4">
                    Nuevo Computador
                </div>

                <div class="card-body p-4">

                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('computer.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Número
                            </label>

                            <input
                                type="number"
                                name="number"
                                class="form-control"
                                value="{{ old('number') }}"
                                placeholder="Ingrese el número del computador"
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
                                    value="{{ old('brand') }}"
                                    placeholder="Ingrese la marca"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">
                                    Ambientes
                                </label>
                                <select name="environment_id" class="form-control" required>
                                    <option value="">Seleccione un ambiente</option>
                                    @foreach ($environments as $environment)
                                        <option value="{{ $environment['id'] }}" {{ old('environment_id') == $environment['id'] ? 'selected' : '' }}>
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