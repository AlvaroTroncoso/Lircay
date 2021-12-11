<?php

require("config.php");


$titulo   		    = $_POST['titulo'];
$descripcion   		= $_POST['descripcion'];
$contenido          = $_POST['contenido'];
$fecha              = date("Y-m-d H:i:s");

//Creando mi INSERT a BD
$queryInsert = ("INSERT INTO 
publicaciones(nombre,titulo,descripcion,contenido,fecha,id_tema)
VALUES ('alvaro','" .$titulo. "','" .$descripcion. "','" .$contenido. "','" .$fecha. "','2')");
$result = mysqli_query($conn, $queryInsert);
echo $titulo;
header("Location:clasificatorias.php");

?>