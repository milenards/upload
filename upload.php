<?php 
$pasta = "img/";
$nomeDoArquivo = $_FILES["arquivo"]["name"];
 echo "<pre>";
// print_r($_FILES["arquivo"]);


$extensao = explode(".", $nomeDoArquivo);
$nomeNovo = round(microtime(true)) . end($extensao);
echo $nomeNovo;

exit();
move_uploaded_file($_FILES["arquivo"]["tmp_name"],$pasta . $nomeDoArquivo);

?>