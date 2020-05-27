<?php
	include_once('../base/lib.php');
	session_start();

	$email=$_POST['email'];
	$senha=$_POST['senha'];

	$login = new Login();
	if($login -> valida($email,$senha)){
		$_SESSION['email'] = $email;
		
		$sql =
		"select 
		usuario.id as id
		,usuario.email as email
	from usuario 
		 where usuario.email = '{$email}'";
		$stmt = Conexao::getInstance()->prepare($sql);
		$stmt->execute();
		
		$row = $stmt->fetch();
		$_SESSION['id'] = $row['id'];
		echo '1';
	}else{
		echo '0';
		
	}

?>
