<?php
// Definir un correo electrónico falso
$correo = "janeth@gmail.com";

// Interpolación del correo en una oración
echo "El correo proporcionado es: $correo<br>";

// Expresión regular para validar el correo
if (preg_match("/^[\w\.-]+@[\w\.-]+\.[a-zA-Z]{2,6}$/", $correo)) {
    echo "El correo es válido<br>";
} else {
    echo "El correo no es válido<br>";
}

// Extraer el nombre de usuario usando substr()
$nombreUsuario = substr($correo, 0, strpos($correo, "@"));
echo "El nombre de usuario es: $nombreUsuario<br>";
?>
