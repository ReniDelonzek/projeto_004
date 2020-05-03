<?php 
    include_once('../base/lib.php');
    $duvida = new Duvida();
    $duvida = $duvida  -> listById($_POST['id']);
    $listagemDuvida = new ListagemDuvida($duvida);
    $listagemDuvida -> show();        
?>