<?php
$texto = "Hola mundo, PHP es genial";

// Obtener longitud
$longitud = strlen($texto);

// Reemplazar palabra
$reemplazo = str_replace("genial", "fácil", $texto);

// Extraer subcadena
$subcadena = substr($texto, 0, 5);

echo "Longitud: $longitud <br>";
echo "Reemplazo: $reemplazo <br>";
echo "Subcadena: $subcadena";
?>
