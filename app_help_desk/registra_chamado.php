<?php

session_start();

//montagem do texto
$texto = $_SESSION['id'] . ' #' . $_POST['titulo'] . ' #' . $_POST['categoria'] .' #' . $_POST['descricao'] . PHP_EOL;
//abrindo o arquivo
$arquivo = fopen('../../app_help_desk/arquivo.txt','a');
//escrevendo no arquivo
fwrite($arquivo, $texto);
//fechando o arquivo
fclose($arquivo);

header('Location:abrir_chamado.php')



?>