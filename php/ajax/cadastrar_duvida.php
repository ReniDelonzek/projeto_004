<?php

include "../base/lib.php";
$titulo = $_POST['titulo'];
$duvida = $_POST['pergunta'];
//$categoria  = $_POST['materia'];
$categoria  = 1;
//$pontos  = $_POST['pontos'];
$pontos = preg_replace( '/[^0-9]/', '', $_POST['pontos']);
$status = 2;

session_start();
$usuario = $_SESSION['id'];

/*
echo $titulo;
echo "|";
echo $duvida;
echo "|";
*/
$sql = "insert into  duvida (titulo, descricao, categoria_id,usuario_id, status_id, pontos)
            values('{$titulo}', '{$duvida}', {$categoria}, {$usuario}, {$status}, {$pontos})";
        //echo $sql;
        $stmt = Conexao::getInstance()->prepare($sql);
        $stmt->execute();
        echo "Duvida Cadastrada com sucesso!";
/*
$duv = new Duvida($titulo, $duvida, $categoria, $usuario, $status, 0);
echo($duv -> save());
*/


?>