<?php

$nome = $_GET["a"];

// colocando: http://localhost/variaveis/exemplo04.php?a=123
var_dump($nome); 
echo "<br/><br/>";

////////////////////////////////////////////////////////////////
// Todo informação de um _GET ou post será recebida em string.
////////////////////////////////////////////////////////////////

// Para converter o tipo:

$nome = (int)$_GET["a"];

var_dump($nome); 
echo "<br/><br/>";

$ip = $_SERVER["REMOTE_ADDR"];

echo $ip;

?>