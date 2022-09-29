<?php
require_once '../../conexion.php';

$ConsultaContato=$con->query("delete from empleados where id_cliente=".$_GET["id_cliente"]."");

echo "<script type='text/javascript'>
	    alert('Los datos de este cliente fueron eliminados Correctamente!');
	    window.location='../../../index.php';
	  </script>";
?>