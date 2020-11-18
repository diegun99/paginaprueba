<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introducción a php</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>


    <div class="contenedor">

    <h1>Arreglos asociativos</h1>

    <?php

    $persona = array(
        'nombre' => 'Jose',
        'apellido' => 'Jimenez',
        'telefono' => '3112452130',
        'direccion' => 'carrera 9 # 3-12'
    );

    ?>
    <pre>
        <?php
    echo print_r($persona);

    ?>

    </pre>

    <?php

    ?>


    </div>

</body>
</html>