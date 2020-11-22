<?php

include("cn.php");

$fecha = $_GET["fecha"];
$nombre = $_GET["nombre"];
$correo = $_GET["correo"];
$comentario = $_GET["comentario"];
$asunto = $_GET["asunto"];

$insertar = "INSERT INTO contacto (fecha, correo, nombre, asunto, comentario) VALUES 
('$fecha', '$correo', '$nombre',  '$asunto', '$comentario')";


$resultado = mysqli_query($conexion,$insertar);

if($resultado)
{
   echo "<script>alert('Los datos fueron enviados con exito'); window.location ='/Proyecto' </script>;";
}
else
{
    echo "<script>alert('No se han guardado los datos');</script>";
}

?>