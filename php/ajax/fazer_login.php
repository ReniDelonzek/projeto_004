<?php
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    include_once("../base/lib.php");
    $conexao=new Conexao2();
    $conexao->valida($email,$senha);  
?>
