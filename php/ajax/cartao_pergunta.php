<?php
require("../base/lib.php");
$sql = "select * from categoria";
$stmt = Conexao::getInstance()->prepare($sql);
$stmt->execute();

$cartao_pergunta = "";
#$cartao_pergunta .= "<div id=\"cartao_pergunta\" class=\"cartao_pergunta\">";
$cartao_pergunta .= "<div class=\"div_pergunta\">";
$cartao_pergunta .= "<label>Faça sua pergunta agora mesmo!</label>";
$cartao_pergunta .= "</div>";
$cartao_pergunta .= "<div class=\"div_icone\">";
$cartao_pergunta .= "<img src=\"../img/icon.jpeg\">";
$cartao_pergunta .= "</div>";
$cartao_pergunta .= "<div class=\"div_seletores\">";
$cartao_pergunta .= "<label class=\"div_cardtexts\">Título</label><br>";
$cartao_pergunta .= "<input type=\"text\" name=\"titulo\" placeholder=\"Escolhe um título bem chamativo ai!\"><br><br>";
$cartao_pergunta .= "<label class=\"div_cardtexts\">Pergunta</label><br>";
$cartao_pergunta .= "<input type=\"text\" name=\"pergunta\" placeholder=\"Insira sua pergunta\"><br>";
$cartao_pergunta .= "</div> <br>";
$cartao_pergunta .= "<hr></hr>";
$cartao_pergunta .= "<div class=\"div_selects\">";
$cartao_pergunta .= "<label>Vai valer:</label><br>";
$cartao_pergunta .= "<select name=\"pontos\">";
$cartao_pergunta .= "<option value=\"10\">10 pontos</option>";
$cartao_pergunta .= "<option value=\"20\">20 pontos</option>";
$cartao_pergunta .= "<option value=\"30\">30 pontos</option>";
$cartao_pergunta .= "</select>";
$cartao_pergunta .= "</div>";
$cartao_pergunta .= "<div class=\"div_selects\">";
/*
$cartao_pergunta .= "<label>Matéria:</label><br>";
$cartao_pergunta .= "<select name=\"materia\">";
$cartao_pergunta .= "<option id='2' value=\"2\">Robótica</option>";
$cartao_pergunta .= "<option>Programação</option>";
$cartao_pergunta .= "<option>Redes</option>";
$cartao_pergunta .= "</select>";
*/
$cartao_pergunta .= "<label>Matéria:</label><br>";
$cartao_pergunta .= "<select name=\"materia\">";
while ($row = $stmt->fetch()) {
    //$menuTemas .= "<li>".$row['descricao']."</li>";
    $cartao_pergunta .= "<option value=\"{$row['id']}\">{$row['descricao']}</option>";

 }
$cartao_pergunta .= "</select>";
$cartao_pergunta .= "</div>";
$cartao_pergunta .= "<div class=\"div_selects\">";
$cartao_pergunta .= "<label>Confirmação:</label><br>";
$cartao_pergunta .= "<input type=\"submit\" value=\"Publicar\" id=\"salvar\" onclick=\"salvar()\">";
$cartao_pergunta .= "</div>";
#$cartao_pergunta .= "</div>";


echo $cartao_pergunta;
?>