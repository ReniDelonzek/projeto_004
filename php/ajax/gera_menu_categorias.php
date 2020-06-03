<?php
require("../base/lib.php");
$sql = "select * from categoria";
$stmt = Conexao::getInstance()->prepare($sql);
$stmt->execute();

$menuTemas = "";
$menuTemas .= "<div class=\"card mb-4 box-shadow\" style=\"width: 130%; background-color: rgb(232, 238, 250); border-radius: 10px; box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.22); text-align: center; margin-left:auto; margin-right:0;\">";
$menuTemas .= "<div class=\"card-body\">";
$menuTemas .= "<h4 class=\"card-title pricing-card-title font-weight-bold mb-3\">NAVEGAR POR TEMAS</h4>";

//echo $menuTemas;
$menuTemas .= "<ul style=\"text-align: left;\">";

while ($row = $stmt->fetch()) {
    $menuTemas .= "<li>" . $row['descricao'] . "</li>";
}
$menuTemas .= "</ul>";
$menuTemas .= "<button type=\"button\" class=\"btn btn-primary btn-sm\" style=\"border-radius: 9px; border-color:transparent; background-color: rgb(8, 53, 136);\">MAIS TEMAS</button>";
$menuTemas .= "</div>";
$menuTemas .= "</div>";

echo $menuTemas;


//    $menuGrupos = "";
//    $menuGrupos .= "<div class=\"card mb-4 box-shadow\" style=\"width: 130%; background-color: rgb(232, 238, 250); border-radius: 10px; box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.22); text-align: center;\">";
//    $menuGrupos .= "<div class=\"card-body\">";
//    $menuGrupos .= "    <h4 class=\"card-title pricing-card-title font-weight-bold mb-3\">NAVEGAR POR GRUPOS</h4>";
//    $menuGrupos .= "    <ul style=\"text-align: left;\">";
//    $menuGrupos .= "        <li>ENGENHARIA</li>";
//    $menuGrupos .= "        <li>SISTEMAS DE INFORMAÇÃO</li>";
//    $menuGrupos .= "        <li>EDUCAÇÃO FÍSICA</li>";
//    $menuGrupos .= "        <li>ADMINISTRAÇÃO</li>";
//    $menuGrupos .= "        <li>CONTABILIDADE</li>";
//    $menuGrupos .= "        <li>NUTRIÇÃO</li>";
//    $menuGrupos .= "        <li>MEDICINA</li>";
//    $menuGrupos .= "        <li>AGRONOMIA</li>";
//    $menuGrupos .= "    </ul>";
//    $menuGrupos .= "    <button type=\"button\" class=\"btn btn-primary btn-sm\" style=\"border-radius: 9px; border-color:transparent; box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.22);  background-color: rgb(8, 53, 136);\">MAIS GRUPOS</button>";
//    $menuGrupos .= "</div>";
//    $menuGrupos .= "</div>";

  // echo $menuGrupos;


/*
   <div class="card mb-4 box-shadow" style="width: 130%; background-color: rgb(232, 238, 250); border-radius: 10px; box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.22); text-align: center;">
                    <div class="card-body">
                        <h4 class="card-title pricing-card-title font-weight-bold mb-3">NAVEGAR POR TEMAS</h4>
                        <ul style="text-align: left;">
                            <li>MANUTENÇÃO</li>
                            <li>HARDWARE</li>
                            <li>SOFTWARE</li>
                            <li>REDES</li>
                            <li>PROGRAMAÇÃO</li>
                            <li>BANCO DE DADOS</li>
                            <li>ROBÓTICA</li>
                            <li>TEORIA GERAL DA ADMINISTRAÇÃO</li>
                        </ul>
                        <button type="button" class="btn btn-primary btn-sm" style="border-radius: 9px; border-color:transparent; background-color: rgb(8, 53, 136);">MAIS TEMAS</button>
                    </div>
                </div>
                <div class="card mb-4 box-shadow" style="width: 130%; background-color: rgb(232, 238, 250); border-radius: 10px; box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.22); text-align: center;">
                    <div class="card-body">
                        <h4 class="card-title pricing-card-title font-weight-bold mb-3">NAVEGAR POR GRUPOS</h4>
                        <ul style="text-align: left;">
                            <li>ENGENHARIA</li>
                            <li>SISITEMAS DE INFORMAÇÃO</li>
                            <li>EDUCAÇÃO FÍSICA</li>
                            <li>ADMINISTRAÇÃO</li>
                            <li>CONTABILIDADE</li>
                            <li>NUTRIÇÃO</li>
                            <li>MEDICINA</li>
                            <li>AGRONOMIA</li>
                        </ul>
                        <button type="button" class="btn btn-primary btn-sm" style="border-radius: 9px; border-color:transparent; box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.22);  background-color: rgb(8, 53, 136);">MAIS GRUPOS</button>
                    </div>
                </div>
                */
