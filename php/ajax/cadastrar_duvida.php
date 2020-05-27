<?php

include "../base/lib.php";
$titulo = $_POST['titulo'];
$duvida = $_POST['pergunta'];
//$categoria  = $_POST['materia'];
$categoria  = $_POST['materia'];
//$pontos  = $_POST['pontos'];
$pontos  = 10;
$usuario = 1;
$status = 2;



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