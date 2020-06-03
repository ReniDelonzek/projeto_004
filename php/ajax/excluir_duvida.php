<?php
	include "../base/lib.php";
	$id = $_GET['id'];

    $exc = new Duvida();
    if($exc->remove($id)){
        echo("<script>window.location.href = \"../../html/pagina_inicial.html \";alert(\"Excluída com Sucesso\")</script>");
    }else{
        echo("<script>window.location.href = \"../../html/pagina_inicial.html\";alert(\"Erro ao excluir\")</script>");
    }

	
?>
