<?php

$fileInput = fopen ('C:\xampp\htdocs\Itec\php\numerosRandom.txt','r') or die (">>>>>> File Not Found <<<<<<\n");

$pares = [];
$impares = [];

while (!feof ($fileInput)) {
    $row = fgets($fileInput);
    if((intval($row) % 2) == 0){
        $pares[] = intval($row);  
    }else{
        $impares[] = intval($row);  
    }
}    

fclose($fileInput);

// Practica 2 ( Pares | Impares) versión web
//Dado el archivo adjunto ("salida.txt") se espera que se realicen las siguientes acciones.
//1) Leer "salida.txt"
//2) Separar valores pares e impares
//3) Ordenar los valores de menor a mayor
//4) Generar dos tablas html/php que muestren los valores ordenados.

?>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
#tablaPares {
    float: left;
    width: 50%;
}
#tablaImares {
    float: right;
    width: 50%;
}
</style>
</head>
    <!-- Tabla pares -->
    <h1> TABLA DE NÚMEROS PARES </h1>
    <table  id="tablaPares">
    
        <tr>
            <th>ID</th>
            <th>VALUE</th> 
        </tr>
        
            
       
        <?php $lenPares = count($pares);  for ($id = 1;$id <= $lenPares;$id++) {?>
            <tr>
                <td><?php echo $id ?></td>
                <td><?php echo $pares[$id] ?></td>
            </tr>

        <?php
            }
        ?>
            
    </table>
    <!-- Tabla impares -->
    <h1> TABLA DE NÚMEROS IMPARES </h1>
    <table id="tablaImares" >
        <tr>
            <th>ID</th>
            <th>VALUE</th> 
        </tr>
       
        <?php $lenImpares = count($impares);  for ($id = 1;$id <= $lenImpares;$id++) {?>
        <tr>
            <td><?php echo $id ?></td>
            <td><?php echo $impares[$id] ?></td>
        </tr>

        <?php
            }
        ?>
    </table>
</html>

	

