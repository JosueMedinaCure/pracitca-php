<!-- AQUI SE MOSTRARA LA TABALA DONDE PODREMOS VISUALIZAR LOS DATOS IMEDIATAMENTE -->

<?php
require_once("app/conexion.php");
?>
<html>
<head>
<title>
Registro de 
</title>
   <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

   <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'>
   <link rel="stylesheet" href="public/css/cssIndex.css">
   <link rel="stylesheet" href="php.css">
   
<script language="javascript" type="text/javascript">
	function eliminar(id)
	{
		if (confirm("Realmente desea eliminar el registro?"))
		{
			window.location="app/Controladores/contactos/elimina.php?id_cliente="+id;
		}
	}
</script>
</head>
<body>
<div class="container">
<h1>Tabla de Registros De Clientes </h1>
  <p>Tabla de <strong>Contenido Editable</strong> aqui podremos editar el contenido deseado.</p>
<div id="table" class="table-editable">
    <a style="text-decoration:none" class="table-add glyphicon glyphicon-plus" href="vistas/agregar.php" title="Agregar clienetes "></a>
    <table class="table">
      <tr>
        <th>Tipo de documento</th>
        <th>Documento</th>
        <th>Nombre (A-Z)</th>
        <th>Numero telefonico</th>
        <th>E-mail</th>
        <th>Direccion</th>
        <th></th>
        <th></th>
      </tr>

<?php
	$ConsultaDatos=$con->query("select * from Empleados order by nombre asc");
	while ($RegistroDatos = $ConsultaDatos->fetch_object())
{
?>    
      <tr>
        <td><?php echo $RegistroDatos->tdoc;?></td>
        <td><?php echo $RegistroDatos->dic;?></td>
        <td><?php echo $RegistroDatos->nombre;?></td>
        <td><?php echo $RegistroDatos->telefono;?></td>
        <td><?php echo $RegistroDatos->correo;?></td>
        <td><?php echo $RegistroDatos->Direccion;?></td>
        <td>
          <a style="text-decoration:none" class="table-remove glyphicon glyphicon-edit" href="vistas/modificar.php?id_cliente=<?php echo $RegistroDatos->id_cliente;?>" title="Modificar"></a>
        </td>
        <td>
          <a style="text-decoration:none" class="table-up glyphicon glyphicon-remove" href="javascript:void(0)" title="Eliminar" onClick="eliminar('<?php echo $RegistroDatos->id_cliente;?>')"></a>
        </td>
      </tr>
      <?php
}
      ?>
    </table>
  </div>
</div>
</body>
</html>