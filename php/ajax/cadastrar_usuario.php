<?php
    session_start();

    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];


    include_once("../base/lib.php");
    $usu = new Usuario();
    $usu->setNome($nome);
    $usu->setEmail($email);
    $usu->setSenha($senha);
    $usu->setPontosBonificacao(0);
    $status = $usu->save();
    if($status == "1"){
        $_SESSION['email'] = $email;
		echo json_encode(array($status));
    }else{
        echo json_encode($status);
    }
?>
