<?php

// Primer producto

$precio_1 = 60;
$cantidad_1 = 4;

// segundo producto

$precio_2 = 90;
$cantidad_2 = 3;

// tercer producto

$precio_3 = 120;
$cantidad_3 = 2;

// calcular el subtotal

$subtotal = $precio_1 * $cantidad_1 + $precio_2 * $cantidad_2 + $precio_3 * $cantidad_3;

// calcular el monto de impuestos

$impuestos = $subtotal * 0.15;

// calcular el descuento

$descuento = $subtotal * 0.05;

// calcular el total a pagar

$total_a_pagar = $subtotal + $impuestos - $descuento;

// mostrar el resumen de la compra

echo "Subtotal: " . $subtotal . "<br>";
echo "Impuestos: " . $impuestos . "<br>";
echo "Descuento: " . $descuento . "<br>";
echo "Total a pagar: " . $total_a_pagar . "<br>";

