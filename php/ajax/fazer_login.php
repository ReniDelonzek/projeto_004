<?php
include_once('../base/lib.php');
session_start();
/*
andrewL@gmail.com
*/
//$email="andrewL@gmail.com";
//$senha="123456";
$email=$_POST['email'];
$senha=$_POST['senha'];

$login = new Login();
if($login -> valida($email,$senha)){
    $_SESSION['email'] = $email;
    echo '1';
}else{
	echo '0';
    
}
/*
	session_start();
	
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    include_once("../base/lib.php");
    $conexao=new Conexao2;
    if($conexao->valida($email,$senha) == "valido"){
		$_SESSION['email'] = $email;
		echo "Valido";
	}else if($conexao->valida($email,$senha) == "invalido"){
		echo "Invalido";
	}else{
		echo "Erro Inesperado";
	}
*/
?>
