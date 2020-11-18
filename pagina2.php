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
        echo var_dump($persona);
        echo $persona['apellido'];

        $persona['apellido'] = 'martinez';
        echo $persona['apellido'];

        $deportes = array("juan",'caro', 'miguel');

        ?>

        </pre>

        <ul>
        <?php

    foreach($deportes as $deporte):
        
        ?>
        
        
       <li> <?php echo $deporte; ?>  </li>

      <?php  

    endforeach;

    ?>

    </ul>


    <?php

    echo "<ul>";

    foreach($persona as $key => $valor) :

        echo "<li>".$key. ": ". $valor. "</li>";

    endforeach;

    

    echo "<ul>";

    $i=0;

    while($i<=10){
        echo $i;
        echo "<br>";
        $i++;

    }

    ?>

    <h2>recorriendo arreglo con while</h2>

    <?php

    $i=0;

    ?>

    <ul>

    <?php

    while ($i < count($deportes)) {

        ?>

       <li> <?php echo $deportes[$i];  ?> </li>

       <?php
        $i++;
    }

    ?>

    </ul>

    <?php
    echo $i;

    ?>




    </div>

</body>
</html>