<?php 
    session_start();
    $id = $_POST['id'];
    include_once('../base/lib.php');

    $duvida = new Duvida();
    $duvida = $duvida  -> listById($_POST['id']);
    $duvida ->setStatusId(1);
    $duvida ->update();
?>
