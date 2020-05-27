<?php 

    $id = $_POST['id'];
    include_once('../base/lib.php');
    $sql =
    "select 
	duvida.id, 
	duvida.titulo as titulo,
	duvida.descricao as descricao,
    usuario.nome as usuario,
    categoria.id as id_categoria,
	categoria.descricao as categoria,
	duvida_status.descricao as status
	from 
		duvida
		inner join usuario on duvida.usuario_id = usuario.id
		inner join categoria on duvida.categoria_id = categoria.id
        inner join duvida_status on duvida.status_id = duvida_status.id
        where duvida.id = {$id}";
    $stmt = Conexao::getInstance()->prepare($sql);
    $stmt->execute();
    echo "<div id=\"center-div\">";
    /*
    $duvida = new Duvida();
    $duvida = $duvida  -> listById($_POST['id']);
    $listagemDuvida = new ListagemDuvida($duvida);
    //$listagemDuvida = new ListagemDuvidaEditar($duvida);
    $listagemDuvida -> show();


    $listagemResposta = new ListaResposta($_POST['id']);
    $listagemResposta ->show();
    /*
    
    
    */
    //---------------------
        $row =  $stmt->fetch();
        $buffer = "<div id=\"card\" class=\"card mb-4 box-shadow\"
        style=\"width: 327%; border-radius: 10px;box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.22);text-align: center;\">";
        $buffer .= "<div class=\"card-body\" style=\"text-align: left;\">";
        $buffer .= "<h4 class=\"card-title pricing-card-title font-weight-bold mb-3\" style=\"text-align: left;\">{$row['titulo']}</h4>";    
        $buffer .= "<h6 class=\"card-title pricing-card-title font-weight-bold mb-3\" style=\"text-align: left;\"><img
        src=\"../imagens/icons/usuario.png\" class=\"mr-3\" alt=\"\" > Por {$row['usuario']}</h6>";
        $buffer .= "<h6 class=\"card-title pricing-card-title mb-0\">{$row['descricao']}</h6>";
        $buffer .= "<button type=\"button\" class=\"chip btn btn-primary btn-sm primary_color\" style=\"border-color: transparent; border-radius: 20px;height: 7%;font-size: 0.5em;  padding: 8px 16px 8px 16px; margin: 8px\">{$row['categoria']}</button>";
        
        $buffer .= "</div>";
        $buffer .= "</div>";

        echo $buffer;

    //----------------------
    echo "</div>";
    echo "</div>";
    echo "<!--Este botao é o do editar para voltar a pagina de edicao que deve ficar dentro do Card da pergunta-->";
    echo "<a href=\"atualiza_duvida.html?id={$id}\" class=\"btn btn-primary btn-sm\">";
    echo "Editar Pergunta";
    
    echo "</a>";
    session_start();
    
    

?>
