
<!-- AQUI LE VAMOS A DAR LA ESTRUCTURA, ES CASI UN HTML -->


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ingreso a Clientes</title>
<link rel="stylesheet" type="text/css" href="../public/css/skeleton.min.css">
<link rel="stylesheet" type="text/css" href="../public/css/styles.css">
<title>INGRESO CLIENTES</title>
         <link rel="stylesheet" href="clientes.css">
</head>
<body>
         
         

<!-- esto sirve para poder traer las librerias desde un href -->
<script language="javascript" type="text/javascript" src="../public/js/jsModificaEliminaAdiciona.js"></script>
<script language="javascript" type="text/javascript" src="../public/js/jsUltimoQuery.js"></script>
</head>


<!-- aqui procedemos a darle estructura a nuestro codigo  -->
<body onload="limpiar()">
  <form action="../app/Controladores/contactos/adiciona.php" method="post" name="form">
    <div class="row">
    <div class="twelve columns">      

    <h1> Ingreso de clientes </h1>
      <label for="tipdoc">Tipo de Documento</label>
      <form id= "tdoc" name= "tdoc">
        
   <table>
      <select class="fondo" name="tdoc">  
                                <!-- COPIE TDoc PARA DAR EL COLOR NEGRO A TODAS LAS TABLAS-->
                                <option value=""> Elige una opción </option>
                                <option value="CC"> CC </option>
                                <option value="CE"> CE </option>
                                <option value="TI"> TI </option>
                                <option value="PASAPORTE"> PASAPORTE </option>
                                <option value="OTRO"> OTRO </option>
</select> 
</table>   
    </div>
    <div class="twelve columns">      
      <label for="nombre">Documentos De Identidad</label>
      <input class="u-full-width" type="text" name="dic" placeholder="Su Docuemtno de Identidad...">
    </div>
    <div class="twelve columns">      
      <label for="nombre">Nombre / Razon Social</label>
      <input class="u-full-width" type="text" name="nom" placeholder="Su Nombre...">
    </div>
    <div class="twelve columns">
      <label for="Telefono">Telefono</label>
      <input class="telefono" type="text" name="tel" placeholder="Su Telefono...">
    </div>
    <div class="twelve columns">
      <label for="correo">Email</label>
      <input class="u-full-width" type="text" name="correo" placeholder="Su Correo...">
    </div>
    <div class="twelve columns">
      <label for="correo">Direccion</label>
      <input class="u-full-width" type="text" name="Direccion" placeholder="Su Direccion...">
    </div>
    <table>
                            
                            

    
    <input type="button" value="Volver" title="Volver" onclick="history.back();" class="button-primary">
    <input type="button" value="Guardar Cambios" title="Agregar Cilente" onclick="validar()" />
  
  </form>
  
   </body>
</html>