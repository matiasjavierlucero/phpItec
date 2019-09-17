<?php 

$items = [
		['sku' => 10, 'name' => 'Mac Book Pro 8Gb 128GB I5', 'origin' => 5, 'price' => 1299],
		['sku' => 12, 'name' => 'Mac Book Pro 8Gb 128GB I5', 'origin' => 6, 'price' => 1299],
		['sku' => 13, 'name' => 'Mac Book Pro 8Gb 128GB I5', 'origin' => 4, 'price' => 1320],
		['sku' => 13, 'name' => 'Mac Book Air 8Gb 128GB I5', 'origin' => 6, 'price' => 1000],
		['sku' => 14, 'name' => 'Mac Book Air 8Gb 128GB I5', 'origin' => 5, 'price' => 980],
		['sku' => 15, 'name' => 'Mac Book Air 8Gb 128GB I5', 'origin' => 4, 'price' => 987],
		['sku' => 16, 'name' => 'Funda Mac Book Pro', 'origin' => 1, 'price' => 20],
		['sku' => 17, 'name' => 'Funda Mac Book Pro', 'origin' => 2, 'price' => 15],
		['sku' => 18, 'name' => 'Funda Mac Book Pro', 'origin' => 3, 'price' => 18],
		['sku' => 19, 'name' => 'Funda Mac Book Pro', 'origin' => 4, 'price' => 20],
		['sku' => 20, 'name' => 'Funda Mac Book Air', 'origin' => 2, 'price' => 15],
		['sku' => 21, 'name' => 'Funda Mac Book Air', 'origin' => 6, 'price' => 4]
	];

//Expresado en porcentajes
$taxes = [
		['id' => 1, 'name' => 'Argentina', 'tax' => 0],
		['id' => 2, 'name' => 'Brasil', 'tax' => 0.20],
		['id' => 3, 'name' => 'Chile', 'tax' => 0.25],
		['id' => 4, 'name' => 'España', 'tax' => 0.30],
		['id' => 5, 'name' => 'USA', 'tax' => 0.64],
		['id' => 6, 'name' => 'China', 'tax' => 0.60]		
	];

//Expresado en Dolares 
$shippingCost = [
		['id' => 1, 'name' => 'Argentina', 'price' => 20],
		['id' => 2, 'name' => 'Brasil', 'price' => 30],
		['id' => 3, 'name' => 'Chile', 'price' => 30],
		['id' => 4, 'name' => 'España', 'price' => 30],
		['id' => 5, 'name' => 'USA', 'price' => 45],
		['id' => 6, 'name' => 'China', 'price' => 10]
	];


foreach ($items as $item){

    $itemtemp= $item;
    $itemtemp ['priceArs'] = $item ['price'] + ( $item ['price'] *.2) + 30;

    $itemArs[]=$itemtemp;

}

;
