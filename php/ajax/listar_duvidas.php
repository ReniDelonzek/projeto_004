<?php
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
        order by data desc";
$stmt = Conexao::getInstance()->prepare($sql);
$stmt->execute();
    $i = 0;    
    $buffer = "";
    while ($row = $stmt->fetch()) {
        if ($i % 2 == 0) {
            echo  "</div>";
            echo  "<div class=\"card-deck mb-3 text-center\">";
        }

        echo "<div class=\"card mb-4 \" style=\"text-align: left;background-color: white; height: 100%; border-radius: 10px;\">";
        echo  "<a href='{../../../html/duvida_detalhe.html?id={$row['id']}' style=\"text-decoration:none; color:black\">";
        echo  "    <div class=\"card-header\" style=\"background-color: transparent; border-color: transparent;\">";
        echo  "        <h4 class=\"my-0 font-weight-normal font-weight-bold\"><p>{$row['titulo']} </p></h4>";
        echo  "        <div class=\"card-body\" style=\"padding-top: 0;\">";
        echo  "            <!-- <h1 class=\"card-title pricing-card-title\">$0 <small class=\"text-muted\">/ mo</small></h1> -->";
        echo  "            <p>{$row['descricao']}</p>";
        //echo  "<button type=\"button\" class=\"chip btn btn-primary btn-sm primary_color\" style=\"border-color: transparent; border-radius: 20px;height: 7%;font-size: 0.5em;  padding: 8px 16px 8px 16px; margin-right: 8px\">REDES</button>";
        //echo  "<button type=\"button\" class=\"btn btn-primary btn-sm primary_color\" style=\"border-color: transparent; border-radius: 20px;height: 7%;font-size: 0.5em;  padding: 8px 16px 8px 16px;\">MANUTENÇÃO</button>";
        echo  "<button type=\"button\" class=\"chip btn btn-primary btn-sm primary_color\" style=\"border-color: transparent; border-radius: 20px;height: 7%;font-size: 0.5em;  padding: 8px 16px 8px 16px; margin-right: 8px\">{$row['categoria']}</button>";
        echo  "</div>";
        echo  "</div>";
        echo  "</a>";
        echo  "</div>";

        $i++;
    }




?>