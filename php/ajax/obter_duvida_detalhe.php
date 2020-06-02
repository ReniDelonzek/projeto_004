<?php 
    session_start();
    
    $id = $_POST['id'];
    include_once('../base/lib.php');
    $sql =
    "select 
	duvida.id, 
	duvida.titulo as titulo,
    duvida.descricao as descricao,
    usuario.id as id_usuario,
    usuario.nome as usuario,
    categoria.id as id_categoria,
	categoria.descricao as categoria,
	duvida.status_id,
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
        $buffer = "<div id=\"card{$id}\" class=\"card mb-4 box-shadow\"
        style=\"width: 327%; border-radius: 10px;box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.22);text-align: center;\">";
        $buffer .= "<div class=\"card-body\" style=\"text-align: left;\">";
        $buffer .= "<h4 class=\"card-title pricing-card-title font-weight-bold mb-3\" style=\"text-align: left;\">{$row['titulo']}</h4>";    
        $buffer .= "<h6 class=\"card-title pricing-card-title font-weight-bold mb-3\" style=\"text-align: left;\"><img
        src=\"../imagens/icons/usuario.png\" class=\"mr-3\" alt=\"\" > Por {$row['usuario']}</h6>";
        $buffer .= "<h6 class=\"card-title pricing-card-title mb-0\">{$row['descricao']}</h6>";
        $buffer .= "<button type=\"button\" class=\"chip btn btn-primary btn-sm primary_color\" style=\"border-color: transparent; border-radius: 20px;height: 7%;font-size: 0.5em;  padding: 8px 16px 8px 16px; margin: 8px\">{$row['categoria']}</button>";
        $buffer .= "</div>";
	if($row['id_usuario'] == $_SESSION['id'] && ($row['status_id']!=1)){
            $buffer .= "<div>";
			$buffer .= "<a href=\"atualiza_duvida.html?id={$id}\" style=\"margin:10px 20px\" class=\"btn btn-primary btn-sm\">Editar Pergunta</a>";
            $buffer .= "<a href=\"excluir_duvida.html?id={$id}\" class=\"btn btn-primary btn-sm\">Excluir Pergunta</a>";
            $buffer .= "</div>";
		}else if($row['status_id'] == 1){
            $buffer .= "<div>";
                $buffer .= "       <span><i class=\"fa fa-check fa-2x\" aria-hidden=\"true\" style=\"color: green;\"></i></span>";
            $buffer .= "</div>";
            $buffer .= "<style> #card{$id} {border-color: green;} </style>";
        }
        $buffer .= "</div>";

        echo $buffer;

    //----------------------
    echo "</div>";
    echo "<!--Este botao é o do editar para voltar a pagina de edicao que deve ficar dentro do Card da pergunta-->";
    if($row['id_usuario'] == $_SESSION['id'] && ($row['status_id']!=1)){
        echo("<div class=\"boxes\" style=\"width: 327%;\"> ");
        echo("<input type=\"checkbox\" id=\"box-1\" name=\"meu_checkbox\" value=\"respondida\">");
        echo("<label for=\"box-1\">A pergunta já foi respondida?</label>");
        echo("<button onclick=\"concluir()\" class=\"btn btn-primary btn-sm\">Salvar</button>");
        echo("</div>");
    }
  
    /**----------------------------------------------------------------------------------
     * listagem resposta
     * ----------------------------------------------------------------------------------
     * 
     */
    $sql =
        "select 
            duvida_resposta.id as id,
            duvida.id,
            duvida_resposta.duvida_id,
            duvida.descricao,
            duvida_resposta.conteudo as conteudo,
            usuario.nome as nome
        
        from 
            duvida_resposta
        inner join usuario on usuario.id = duvida_resposta.usuario_id
        inner join duvida on duvida.id = duvida_resposta.duvida_id
        where duvida.id = {$id}";

        $stmt = Conexao::getInstance()->prepare($sql);
        $stmt->execute();
        $buffer  = "<div class=\"card mb-4 box-shadow\" style=\"width: 327%;border-radius: 10px;box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.22);text-align: center;\">";
        $buffer .= "<div class=\"card-body\">";
        $buffer .= "<h4 class=\"card-title pricing-card-title font-weight-bold mb-3\" style=\"text-align: left;\">RESPOSTAS:</h4>";
        while ($row = $stmt->fetch()) {
            $buffer .= "<div class=\"card mb-4 box-shadow\"";
            $buffer .= "style=\"background-color: rgb(232, 238, 250); border-radius: 10px; box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.22); text-align: center;\">";
            $buffer .= "<div class=\"card-body\" style=\"text-align: left;\">";
            $buffer .= "<h6 class=\"card-title pricing-card-title font-weight-bold mb-3\" style=\"text-align: left;\">";
            $buffer .= "<img src=\"../imagens/icons/usuario.png\" class=\"mr-3\" alt=\"\"> {$row['nome']}";
            $buffer .= "</h6>";
            $buffer .= "<h6 class=\"card-title pricing-card-title mb-0\">{$row['conteudo']}</h6>";
            $buffer .= "</div>";
            $buffer .= "</div>";
        }


    echo $buffer;

    

?>
