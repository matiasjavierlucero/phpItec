<?php

$fileInput = fopen ('C:\xampp\htdocs\Itec\php\numerosRandom.txt','r') or die (">>>>>> File Not Found <<<<<<\n");
// $archivoPares = fopen("numerosPares.txt", "w+b"); 
// $archivoImpares = fopen("numerosImpares.txt", "w+b"); 
$archivoParesOrdenados = fopen("reporte_pares.txt", "w+b"); 
$archivoImparesOrdenados = fopen("reporte_impares.txt", "w+b"); 


$pares = [];
$paresOrdenados = [];
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

// Pares ordenados de menor a mayor
asort($pares);
foreach ($pares as $x){
    fwrite ($archivoParesOrdenados , $x . "\n");
}
fclose($archivoParesOrdenados);

// Impares ordenados de menor a mayor
asort($impares);
foreach ($impares as $x){
    fwrite ($archivoImparesOrdenados , $x . "\n");
}
fclose($archivoImparesOrdenados);

// Cantidad de pares e impares
echo ('Hay '.count($pares).' numeros pares, y se genero el archivo reporte_pares.txt'. "\n");
echo ('Hay '.count($impares).' numeros impares, y se genero el archivo reporte_impares.txt'. "\n");



?>