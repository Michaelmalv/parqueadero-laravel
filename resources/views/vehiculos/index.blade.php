<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Vehículos en Parqueadero</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h3 class="mb-3">🚗 Vehículos en el Parqueadero</h3>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('vehiculos.create') }}" class="btn btn-primary mb-3">
        + Registrar Vehículo
    </a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
            <tr>
                <th>Placa</th>
                <th>Tipo</th>
                <th>Propietario</th>
                <th>Ingreso</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @forelse($vehiculos as $vehiculo)
                <tr>
                    <td>{{ $vehiculo->placa }}</td>
                    <td>{{ ucfirst($vehiculo->tipo) }}</td>
                    <td>{{ $vehiculo->propietario ?? '-' }}</td>
                    <td>{{ $vehiculo->hora_ingreso }}</td>
                    <td>
                        <a href="{{ route('vehiculos.edit', $vehiculo) }}" class="btn btn-sm btn-warning">
                            Editar
                        </a>

                        <form action="{{ route('vehiculos.destroy', $vehiculo) }}"
                              method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger"
                                    onclick="return confirm('¿Marcar vehículo como salido?')">
                                Salida
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No hay vehículos registrados</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
