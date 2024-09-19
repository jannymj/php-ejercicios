<?php
// Definir una variable de tipo entero y otra de tipo flotante
$entero = 10;
$flotante = 3.5;

// Mostrar el tipo de dato usando gettype()
echo "El tipo de dato de la variable \$entero es: " . gettype($entero) . "<br>";
echo "El tipo de dato de la variable \$flotante es: " . gettype($flotante) . "<br>";

// Realizar una suma entre ambas variables
$resultado = $entero + $flotante;
echo "El resultado de la suma entre $entero y $flotante es: $resultado<br>";

// Multiplicar ambas variables por 10
$enteroMultiplicado = $entero * 10;
$flotanteMultiplicado = $flotante * 10;

echo "El entero multiplicado por 10 es: $enteroMultiplicado<br>";
echo "El flotante multiplicado por 10 es: $flotanteMultiplicado<br>";
?>

