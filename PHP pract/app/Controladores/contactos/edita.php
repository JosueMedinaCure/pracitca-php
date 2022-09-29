
<!-- ESTO ES PARA EDITAR LOS VALORES DE UNA TABLA CUANDO SEA NECESARIO -->

<?php
require_once '../../conexion.php';

//print_r($_POST);
//echo $sql;
$res=$con->query("update cliente 
set
tdoc='".$_POST["tdoc"]."',
nombre='".$_POST["nom"]."',
telefono='".$_POST["tel"]."',
correo='".$_POST["correo"]."',
telefono='".$_POST["Direccion"]."'
where
;
echo "<script type=''>
	alert('Los datos de este cliente fueron Modificados Correctamente!');
	window.location='../../../index.php';
</script>";
?>