<?php

require("config.php");
$comentario = $_POST['comentario'];
$id_publicacion = $_POST['id_publicacion'];
//Creando mi INSERT a BD
//$queryInsert = ("INSERT INTO video(titulo, url, descripcion,fecha) VALUES ('" .$nombreVideo. "','" .$url_final_video. "','" .$descripcion. "')");

$queryInsert = ("INSERT INTO `comentario` (`id`, `nombre`, `comentario`, `id_publicacion`) VALUES (NULL, 'Usuario', '".$_POST['comentario']."', '".$_POST['id_publicacion']."')");
//INSERT INTO `comentario` (`id`, `nombre`, `comentario`, `id_publicacion`) VALUES (NULL, 'adas', 'dadasd', '5');
$result = mysqli_query($conn, $queryInsert);
header("Location:elecciones.php");
?>

