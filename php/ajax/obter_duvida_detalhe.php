<?php 

    $id = $_POST['id'];
    include_once('../base/lib.php');

    echo "<div id=\"center-div\">";
    $duvida = new Duvida();
    $duvida = $duvida  -> listById($_POST['id']);
    $listagemDuvida = new ListagemDuvida($duvida);
    //$listagemDuvida = new ListagemDuvidaEditar($duvida);
    $listagemDuvida -> show();


    $listagemResposta = new ListaResposta($_POST['id']);
    $listagemResposta ->show();
    /*
    
    
    */
    echo "</div>";
    echo "</div>";
    echo "<!--Este botao é o do editar para voltar a pagina de edicao que deve ficar dentro do Card da pergunta-->";
    echo "<a href=\"atualiza_duvida.html?id={$id}\" class=\"btn btn-primary btn-sm\">";
    echo "Editar Pergunta";
    echo "</a>";
    

?>
