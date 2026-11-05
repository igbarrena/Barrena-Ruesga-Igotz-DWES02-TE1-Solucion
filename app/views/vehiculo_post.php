
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de los vehículos</title>
</head>

<body>
    <header>
        <h1>Datos de los vehículos</h1>
    </header>
    
    <main>
       <?php foreach ($vehiculos as $vehiculo): ?>
            <ul>
                <?php foreach ($vehiculo as $clave => $valor): ?>
                    <?php if ($clave === 'sidecar'): ?>
                        <?php if ($valor): ?>
                            <li><?= $clave ?>: Sí</li>
                        <?php else: ?>  
                            <li><?= $clave ?>: No</li>
                        <?php endif; ?>
                    <?php else: ?>
                        <li><?= $clave ?>: <?= $valor ?></li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        <?php endforeach; ?>
    </main>

</body>

</html>
