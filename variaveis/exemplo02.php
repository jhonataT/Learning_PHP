<?php

    $anoNascimento = 2000;

    $nomeCompleto = "";

    $nome1 = "Jhonata";

    $sobrenome = "Tenorio";

    //Concatenar:
    $nomeCompleto = $nome1 . " " . $sobrenome; 
    echo $nomeCompleto . "<br/>";

    // exit; // Para a execução do código. 

    echo $nome1;

    echo "<br/>";

    unset($nome1); // Deleta a variável

    if(isset($nome1)){ // Verifica se a variável está definida.
        echo $nome1;
    } else {
        echo "WOW";
    }

?>