<?php
// Definir variables para edad, nombre y si es estudiante
$edad = 20;
$nombre = "Janeth";
$esEstudiante = true;

// Mostrar los valores en una oración
echo "Mi nombre es $nombre, tengo $edad años y soy estudiante: " . ($esEstudiante ? 'Sí' : 'No') . "<br>";

// Modificar una variable y volver a mostrar la oración
$esEstudiante = false;
echo "Mi nombre es $nombre, tengo $edad años y soy estudiante: " . ($esEstudiante ? 'Sí' : 'No') . "<br>";
?>
