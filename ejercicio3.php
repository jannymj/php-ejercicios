<?php
// Declarar el número
$numero = 11;
// Usar un bucle for para generar la tabla de multiplicar

echo "Tabla de multiplicar del $numero:<br>";
for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado<br>";
}
?>
