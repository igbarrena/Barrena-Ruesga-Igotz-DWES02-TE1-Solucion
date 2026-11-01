
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del vehículo</title>
</head>

<body>
    <header>
        <h1>Datos del vehículo</h1>
    </header>

    <main>
        <?php if ($vehiculo === null): ?> 
            <p>Vehículo no encontrado</p>
        <?php else: ?>
            <ul>
                <li>Id: <?php echo $vehiculo->id; ?></li>
                <li>Tipo: <?php echo $vehiculo->tipo; ?></li>
                <li>Marca: <?php echo $vehiculo->marca; ?></li>
                <li>Modelo: <?php echo $vehiculo->modelo; ?></li>
                <li>Año: <?php echo $vehiculo->anio; ?></li>
                <?php if ($vehiculo instanceof \App\Models\Coche): ?>
                    <li>Puertas: <?php echo $vehiculo->puertas; ?></li>
                <?php elseif ($vehiculo instanceof App\Models\Moto): ?>
                    <?php if ($vehiculo->sidecar): ?>
                        <li>Sidecar: Sí</li>
                    <?php else: ?>
                        <li>Sidecar: No</li>
                    <?php endif; ?>   
                <?php endif; ?>
             </ul>
        <?php endif; ?>
    </main>

</body>

</html>
