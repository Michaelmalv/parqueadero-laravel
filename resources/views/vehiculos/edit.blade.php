<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Vehículo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h3>✏️ Editar Vehículo</h3>

    <form action="{{ route('vehiculos.update', $vehiculo) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Placa</label>
            <input type="text" name="placa" class="form-control"
                   value="{{ $vehiculo->placa }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tipo</label>
            <select name="tipo" class="form-select" required>
                <option value="carro" @selected($vehiculo->tipo=='carro')>Carro</option>
                <option value="moto" @selected($vehiculo->tipo=='moto')>Moto</option>
                <option value="camioneta" @selected($vehiculo->tipo=='camioneta')>Camioneta</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Propietario</label>
            <input type="text" name="propietario" class="form-control"
                   value="{{ $vehiculo->propietario }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Observaciones</label>
            <textarea name="observaciones" class="form-control">{{ $vehiculo->observaciones }}</textarea>
        </div>

        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('vehiculos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

</body>
</html>
