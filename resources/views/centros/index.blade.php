@extends('layout.app')
@section('content')
<div class="container py-5">
    <!-- Encabezado -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-bold text-success mb-1">
                Gestión de Centros de Formación
            </h1>
            <p class="text-secondary mb-0">
                Administra los centros de formación registrados en el sistema.
            </p>
        </div>
        {{-- <a href="{{ route('training_center.create') }}" 
            class="btn btn-success rounded-pill px-4 shadow-sm fw-semibold">
            <i class="fas fa-plus me-1"></i> Nuevo Centro
        </a> --}}
    </div>
    <!-- Tabla -->
    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle mb-0">
                <thead class="table-dark text-center">
                    <tr>
                        <th class="py-3">ID</th>
                        <th class="text-start py-3">Nombre</th>
                        <th class="text-start py-3">Dirección</th>
                        {{-- <th class="py-3 sticky-actions col-acciones">Acciones</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($trainingcenters as $trainingcenter)
                    <tr>
                        <td class="text-center text-muted fw-bold">{{ $trainingcenter['id'] }}</td>
                        <td class="fw-semibold text-dark text-start">
                            {{ $trainingcenter['name'] }}
                        </td>
                        <td class="text-secondary text-start">{{ $trainingcenter['location'] }}</td>
                        {{-- <td class="text-center sticky-actions col-acciones"> 
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('training_center.show', $trainingcenter->id) }}"
                                    class="btn btn-sm btn-outline-primary rounded-circle action-btn"
                                    title="Ver detalle">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('training_center.edit', $trainingcenter->id) }}"
                                    class="btn btn-sm btn-outline-warning rounded-circle action-btn"
                                    title="Editar">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <form action="{{ route('training_center.destroy', $trainingcenter->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger rounded-circle action-btn"
                                        onclick="return confirm('¿Estás seguro de que deseas eliminar este centro de formación?')"
                                        title="Eliminar">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td> --}}
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    {{-- <tr> 
                        <td colspan="4" class="bg-light py-3 border-top">
                            <div class="d-flex justify-content-center m-0">
                                {{ $trainingcenters->links() }}
                            </div>
                        </td>
                    </tr> --}}
                </tfoot>
            </table>
        </div>
    </div>
</div>

<style>
    /* Ancho moderado y equilibrado para la columna de acciones */
    .col-acciones {
        width: 140px;
        min-width: 140px;
    }

    .action-btn {
        width: 31px;
        height: 31px;
        padding: 0;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 0.8rem;
        transition: all 0.2s ease-in-out;
    }

    .action-btn:hover {
        transform: translateY(-2px);
    }

    /* Columna de acciones fija (Sticky) */
    .sticky-actions {
        position: sticky;
        right: 0;
        background-color: #ffffff;
        z-index: 2;
        box-shadow: -3px 0 5px rgba(0, 0, 0, 0.03);
    }

    /* Ajuste de color de fondo para filas impares (striped) en la celda fija */
    .table-striped > tbody > tr:nth-of-type(odd) > td.sticky-actions {
        background-color: #f9fbf9;
    }

    /* Ajuste de color de fondo al hacer hover en la celda fija */
    .table-hover > tbody > tr:hover > td.sticky-actions {
        background-color: #f1f3f5;
    }

    /* Encabezado fijo de acciones */
    thead th.sticky-actions {
        background-color: #212529 !important;
        z-index: 3;
    }

    .pagination {
        margin-bottom: 0 !important;
    }

    .pagination .page-item.active .page-link {
        background-color: #198754;
        border-color: #198754;
        color: white;
    }

    .pagination .page-link {
        color: #198754;
        box-shadow: none !important;
    }

    .pagination .page-link:hover {
        background-color: #198754;
        border-color: #198754;
        color: white;
    }
</style>
@endsection