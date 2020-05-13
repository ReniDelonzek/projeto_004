<?php

include "../base/lib.php";
$titulo = $_POST['titulo'];
$duvida = $_POST['duvida'];
$categoria  = $_POST['materia'];
$pontos  = $_POST['pontos'];
$usuario = 1;
$status = 2;



echo $titulo;
echo "|";
echo $duvida;
echo "|";

$duv = new Duvida($titulo, $duvida, $categoria, $usuario, $status, 0);
$duv -> save();



?>