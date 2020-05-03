<?php
    include_once('../base/lib.php');
    $listaDuvida = new ListaCardDuvida(new Duvida());
    echo $listaDuvida -> render();
?>