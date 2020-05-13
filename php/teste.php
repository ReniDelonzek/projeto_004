<?php
if ($_POST['categorias'] == '') {
?>

    <script>
        alert("Selecione ao menos um tema.");
        window.location.href = "temas.php";
    </script>

<?php
}
//PERCORRE A MATRIZ DE CHECKBOXES QUE FOI PASSADA PELA TELA ANTERIOR
foreach ($_POST['categorias'] as $value) {
    echo "$value <br>";
}
