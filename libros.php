<?php

include("cn.php");
$autores = " SELECT * From titulos";

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="autores.css" rel="stylesheet" />
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<title>Autores</title>
</head>
<body>
     
<div class="contenedor-tabla">

<div class="tabla-titulo"> Libros  </div>
<div class="tabla-cabecera"> ID  </div>
<div class="tabla-cabecera"> Titulo  </div>
<div class="tabla-cabecera"> Tipo  </div>
<div class="tabla-cabecera"> Precio  </div>

<?php $resultado = mysqli_query($conexion,$autores); 

 

 while($row = mysqli_fetch_assoc($resultado))  {  ?>
  

<div class = "tabla-articulo"> <?php echo $row["id_titulo"] ?>  </div>
<div class = "tabla-articulo"> <?php echo $row["titulo"] ?>  </div>
<div class = "tabla-articulo"> <?php echo $row["tipo"] ?>  </div>
<div class = "tabla-articulo"> <?php echo $row["precio"] ?>  </div>

 <?php } ?>


</div>
     


</body>
</html>
