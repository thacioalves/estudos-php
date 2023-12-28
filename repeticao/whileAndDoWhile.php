<?php

    $frutas = ["banana","maça","pera","uva"];

    $contador = count($frutas);

    $i = 0;

    do {
        
        echo $frutas[$i] . "\n";

        $i++;

    } while ($i < $contador);

?>