<?php
    include "../base/lib.php";
    
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['duvida'];
    $categoria = $_POST['materia'];
    $pontos = preg_replace( '/[^0-9]/', '', $_POST['pontos']);
    
    

    $sql = "UPDATE duvida 
                SET titulo = '{$titulo}', 
                descricao = '{$descricao}', 
                categoria_id = {$categoria},
                pontos = {$pontos}
                WHERE id = {$id};";
    
    $stmt = Conexao::getInstance()->prepare($sql);
    $stmt->execute();
?>