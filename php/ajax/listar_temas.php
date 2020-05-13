 <?php
    include_once "../base/lib2.php";
    $categoria = new cardCategoria(new Conexao());
    $categoria->render();
    ?>