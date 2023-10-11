\<meta http-equiv="refresh" content="120" >
<?php 

$lines = file_get_contents("dados.txt");
$lines = explode("\n", $lines);
$lines = array_unique($lines);

$num_linhas = count($lines) -1;
⚡
?>

<meta http-equiv="content-type" content="text/html" />
	<meta http-equiv="refresh" content="50;URL=contador.php" />
	<title>Total.: ( <?php echo "$num_linhas"; ?> )</title>
<body  bgcolor="#000000" text="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<p align="center"><font color="#FF0000" size="4" face="Verdana, Arial, Helvetica, sans-serif"><strong> ⚡ ⚡☣Kift☣ ⚡ ⚡ </strong></font></p>
<p><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
  <?php 
//$arquivo = fopen ("dados.txt", "r"); 

$num_linhas= 0;
foreach ($lines as $linha) {
      if ($linha != ""){
        $num_linhas++; 
        echo $num_linhas." - ".$linha."<font color='#66CC00' size='2' face='Verdana, Arial, Helvetica, sans-serif'>[⚡⚡☠🍺Clientes Cadastrados Com Sucesso.☠🍺⚡⚡]</font></strong><br>";          
      }
}




/*
$num_linhas = 0; 

while (!feof ($arquivo)) { 
    if ($linha = fgets($arquivo)){ 
      $num_linhas++; 
      echo $num_linhas." - ".$linha."<font color='#66CC00' size='2' face='Verdana, Arial, Helvetica, sans-serif'>[☠🍺Clientes Cadastrados Com Sucesso.☠🍺]</font></strong><br>";  
     } 
} 
fclose ($arquivo);
*/
?>
  <?php
echo "<br><br>"; 
echo "Acessos: " . $num_linhas; ?>
  - <b>Chinela ☠🍺☠🍺</b> </font> <strong>