<?php

include("cn.php");
$autores = " SELECT * From contacto";

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="contacto.css" rel="stylesheet" />
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<title>Contacto</title>
</head>
<body>
     
<div class = "contenedor-contacto">

<h2 class = "Titulo-encabezado" > Completa la informacion de contacto </h2>

<form action="insertar.php" method ="" class ="contenedor-formulario">
<label for="" class = "contenedor-label"> Fecha</label>
<input name ="fecha" type="date" class = "contenedor-input">
<label for="" class = "contenedor-label"> Nombre</label>
<input name ="nombre" type="text" class = "contenedor-input">
<label for="" class = "contenedor-label"> Correo</label>
<input name ="correo" type="text" class = "contenedor-input-2">
<label for="" class = "contenedor-label"> Comentario</label>
<input name ="comentario" type="text" class = "contenedor-input-1">
<label for="" class = "contenedor-label"> Asunto</label>
<input name ="asunto" type="text" class = "contenedor-input-1">

<input type="submit" class="contenedor-submit" value ="Registrar">

</form>


</div>



<div class="contenedor-tabla">

<div class="tabla-titulo"> Contacto  </div>
<div class="tabla-cabecera"> ID  </div>
<div class="tabla-cabecera"> Fecha  </div>
<div class="tabla-cabecera"> Correo  </div>
<div class="tabla-cabecera"> Nombre  </div>
<div class="tabla-cabecera"> Asunto  </div>
<div class="tabla-cabecera"> Comentario  </div>

<?php $resultado = mysqli_query($conexion,$autores); 

 

 while($row = mysqli_fetch_assoc($resultado))  {  ?>
  

<div class = "tabla-articulo"> <?php echo $row["id"] ?>  </div>
<div class = "tabla-articulo"> <?php echo $row["fecha"] ?>  </div>
<div class = "tabla-articulo"> <?php echo $row["correo"] ?>  </div>
<div class = "tabla-articulo"> <?php echo $row["nombre"] ?>  </div>
<div class = "tabla-articulo"> <?php echo $row["asunto"] ?>  </div>
<div class = "tabla-articulo"> <?php echo $row["comentario"] ?>  </div>

 <?php } ?>


</div>
     


</body>
</html>
