<!-- ESTO NOS LLEVA A LA PESTANA PARA INGRESAR OTRO CLIENTE -->

<?php 
require_once '../../conexion.php';

$ConsultaContato=$con->query("insert into empleados
values
(null,'".$_POST["tdoc"]."','".$_POST["dic"]."','".$_POST["nom"]."','".$_POST["tel"]."','".$_POST["correo"]."','".$_POST["Direccion"]."')");
echo "<script type='text/javascript'>
     alert('Los Datos del cliente fueron Ingresados Correctamente!');
     window.location='../../../index.php';
      </script>";
?>
