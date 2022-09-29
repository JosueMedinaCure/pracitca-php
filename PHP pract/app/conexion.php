
<!-- ESTA ES LA CONEXION  -->
<?php
$nombreservidor = "localhost";
$nombreusuario = "root";
$contrasenia = "";
$basededatos = "NombreBaseDeDatos";

// Creando la conexión
$con = new mysqli($nombreservidor, $nombreusuario, $contrasenia, $basededatos);

// Comprovando conexión
if ($con->connect_error) {
	die("Conexión Fallida: " . $con->connect_error);
}
?>
