<?php
// Declarar dos variables numéricas
$num1 = 100;
$num2 = 5;

// Operaciones aritméticas
echo "Suma: " . ($num1 + $num2) . "<br>";
echo "Resta: " . ($num1 - $num2) . "<br>";
echo "Multiplicación: " . ($num1 * $num2) . "<br>";
echo "División: " . ($num1 / $num2) . "<br>";
echo "Módulo: " . ($num1 % $num2) . "<br>";

// Operadores de comparación
echo "¿$num1 es mayor que $num2? " . ($num1 > $num2 ? 'true' : 'false') . "<br>";
echo "¿$num1 es igual a $num2? " . ($num1 == $num2 ? 'true' : 'false') . "<br>";

// Operadores lógicos
echo "¿$num1 es mayor que $num2 y $num1 es impar? " . (($num1 > $num2 && $num1 % 2 != 0) ? 'true' : 'false') . "<br>";
?>
