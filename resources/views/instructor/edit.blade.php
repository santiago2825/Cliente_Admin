@extends('layout.app')
@section('content')
    <div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-7">

            <div class="card border-0 shadow rounded-4">

                <div class="card-header bg-success text-white text-center fw-bold fs-4">
                    Actualizar Instructor
                </div>

                <div class="card-body p-4">

                    <form action="{{ route('profesor.update', $teacher) }}" method="POST">

                        @csrf
                        @method('PUT')

                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Nombre del Instructor
                            </label>

                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                value="{{ old('name', $teacher['name']) }}"
                                placeholder="Ingrese el nombre del instructor"
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
                                value="{{ old('email', $teacher['email']) }}"
                                placeholder="Ingrese el correo electrónico"
                                required>

                        </div>

                        <div class="mb-3">

                                <label class="form-label fw-semibold">
                                Número de Documento
                            </label>

                            <input
                                type="text"
                                name="document"
                                class="form-control"
                                value="{{ old('document', $teacher['document']) }}"
                                placeholder="Ingrese el número de documento"
                                required>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('profesor.index') }}"
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