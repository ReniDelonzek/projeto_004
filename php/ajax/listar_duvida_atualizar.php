<?php
//echo "<h1>b</h1>";
    //echo $_POST['id'];

    include "../base/lib.php";

    $id = $_POST['id'];
    
    $sql = "select * from duvida where id ={$id}";

    //echo $sql;
    $stmt = Conexao::getInstance()->prepare($sql);
    $stmt->execute();
    $row = $stmt -> fetch();

    //echo $row['descricao'];
    $titulo = $row['titulo'];
    $descricao = $row['descricao'];

    echo "<div id=\"cartao_pergunta\" class=\"cartao_pergunta\" style=\"box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);\">";
    echo "<div class=\"div_pergunta\">";
    echo "<label>Faça sua pergunta agora mesmo!</label>";
    echo "</div>";
    echo "<div class=\"div_icone\">";
    echo "<img src=\"../img/icon.jpeg\">";
    echo "</div>";
    echo "<div id=\"cadastro_duvida\" class=\"div_seletores\">";
    echo "<label class=\"div_cardtexts\">Título</label><br>";
    echo "<input id=titulo type=\"text\" name=\"titulo\" placeholder=\"Escolhe um título bem chamativo ai!\" value='{$titulo}' style=\"color:black;\"><br><br>";
    echo "  <label class=\"div_cardtexts\">Pergunta</label><br>";
    echo "<input type=\"text\" name=\"duvida\" placeholder=\"Insira sua pergunta\" value='{$descricao}' ><br>";
    echo "</div> <br>";
    echo "<hr></hr>";
    echo "<div class=\"div_selects\">";
    echo "  <label>Vai valer:</label><br>";
    echo "      <select name=\"pontos\">";
    echo "          <option>10 pontos</option>";
    echo "          <option>20 pontos</option>";
    echo "          <option>30 pontos</option>";
    echo "          </select>";
    echo "   </div>";
    echo "          <div class=\"div_selects\">";
    echo "          <label>Matéria:</label><br>";
    echo "          <select id=\"materia\" name=\"materia\">";
    echo "          <option value=\"1\">Robótica</option>";
    echo "          <option value=\"2\"> Programação</option>";
    echo "          <option value=\"3\">Redes</option>";
    echo "          </select>";
    echo "          </div>";
    echo "          <div class=\"div_selects\">";
    echo "          <label>Confirmação:</label><br>";
    echo "          <input type=\"submit\" value=\"Alterar\" id=\"alterar\" onclick=\"alterar()\">";
    echo "          </div>";
    echo "          </div>";

        
        ?>