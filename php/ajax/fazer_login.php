<?php
	include_once('../base/lib.php');
	session_start();

	$email=$_POST['email'];
	$senha=$_POST['senha'];

	$login = new Login();
	if($login -> valida($email,$senha)){
		$_SESSION['email'] = $email;
		echo '1';
	}else{
		echo '0';
		
	}

?>
