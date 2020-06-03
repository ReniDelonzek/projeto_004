<?php
	session_start();
	include "../base/lib.php";
	$conteudo = $_POST['conteudo'];
	$duvida_id = $_POST['id'];
	$usuario_id = $_SESSION['id'];

	$sql = " INSERT INTO duvida_resposta(conteudo,duvida_id,usuario_id) 
	VALUES ('{$conteudo}',{$duvida_id},{$usuario_id}) " ;

	$stmt = Conexao::getInstance()->prepare($sql);
	$stmt->execute();


?>