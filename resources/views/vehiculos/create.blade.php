<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Vehículo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h3>➕ Registrar Vehículo</h3>

    <form action="{{ route('vehiculos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Placa</label>
            <input type="text" name="placa" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tipo</label>
            <select name="tipo" class="form-select" required>
                <option value="">Seleccione</option>
                <option value="carro">Carro</option>
                <option value="moto">Moto</option>
                <option value="camioneta">Camioneta</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Propietario (opcional)</label>
            <input type="text" name="propietario" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Observaciones</label>
            <textarea name="observaciones" class="form-control"></textarea>
        </div>

        <button class="btn btn-success">Guardar</button>
        <a href="{{ route('vehiculos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

</body>
</html>
