<?php
    $archivo = fopen("numerosRandom.txt", "w+b");    // Abrir el archivo


    $cant_num_random = 15000;

    for ($x = 1;$x <= $cant_num_random;$x++){     // For de 1 a $cant_num_random
      $numbers_random = rand(1,$cant_num_random);
      fwrite ($archivo , $numbers_random . "\n");
    }

    fclose($archivo);   // Cerrar el archivo
?>