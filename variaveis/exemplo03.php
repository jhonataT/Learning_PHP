<?php

/////////////////////////////////////////
// Tipos básicos:
$nome = "Hcode";
$site = 'ww.hcode.com.br';

$ano = 1990;
$salario = 5500.99;
$bloqueado = false;
/////////////////////////////////////////
// Tipos compostos:
$frutas = array("abacaxi", "laranja", "manga");

echo $frutas[1] . "<br/><br/>";

$nascimento = new DateTime(); // Classe nativa do php.

var_dump($nascimento);
echo "<br/><br/>";

///////////////////////////////////////
// Tipos especias:

$arquivo = fopen("exemplo03.php", "r");

var_dump($arquivo); // resourse(3) of type (stream);

echo "<br/><br/>";

$nulo = NULL;

var_dump($nulo); // NULL;

?>