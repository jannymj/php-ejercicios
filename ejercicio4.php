<?php
// Declarar el número

$numero = 10;
// Inicializar la variable para el factorial
$factorial = 1;
// Usar un bucle for para calcular el factorial

for ($i = 1; $i <= $numero; $i++) {
    $factorial *= $i;
}
// Mostrar el resultado

echo "El factorial de $numero es: $factorial";
?>
