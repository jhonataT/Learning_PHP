<?php
    // include "exemplo01.php"; // Tenta funcionar msm que o arquivo não exista ou que tenha algum erro.
    require_once "inc/exemplo01.php"; // Obriga que o arquivo exista e que ele esteja funcionando corretamente.
    require_once "inc/exemplo01.php"; // _once = Apenas uma vez o arquivo.
    $resultado = somar(10, 20);

    echo "<br/> $resultado";

?>