
<?php

$arquivo = file_get_contents('credentials/db.json');
 
$json = json_decode($arquivo);
echo 'Código: ' . $json->HOST;
