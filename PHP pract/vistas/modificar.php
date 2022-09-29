
<!-- ESTO ES PARA MODIFICAR LOS DOCUMENTOS QUE INGRESARON SI ES NECESARIO -->


<?php
require_once("../app/conexion.php");
$res= $con ->query("select * from empleados where id_cliente=".$_GET["id_cliente"]."");
?>
<html>
<head>
<title>Agregar cliente</title>

<!-- estas son las librerias,  -->
<script language="javascript" type="text/javascript" src="../public/js/jsModificaEliminaAdiciona.js"></script>
<script language="javascript" type="text/javascript" src="../public/js/jsUltimoQuery.js"></script>
<script language="javascript" type="text/javascript" src="../public/js/jsMascaraTelefono.js"></script>
</head>

<body onLoad="limpiar()">
<?php
if ($reg = $res->fetch_object())
{
?>
<form action="../app/Controladores/contactos/edita.php" method="post" name="form">
    <div class="row">
    <div class="twelve columns">
      <label for="nombre">Nombre</label>
      <input class="u-full-width" type="text" name="nom" placeholder="Su Nombre..." value="<?php echo $reg->nombre;?>">
    </div>
    <div class="twelve columns">
      <label for="Telefono">Teléfono</label>
      <input class="telefono" type="text" name="tel" placeholder="Su Telefono..." value="<?php echo $reg->telefono;?>">
    </div>
    <div class="twelve columns">
      <label for="correo">Correo</label>
      <input class="u-full-width" type="text" name="correo" placeholder="Su Correo..." value="<?php echo $reg->correo;?>">
    </div>
  
</form>
<?php
}
?>
<script type="text/javascript">
	$(document).ready(function(){
  $('.telefono').mask('(00) 9 9999-9999');
});
</script>
</body>
</html>