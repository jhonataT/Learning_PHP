<?php
    // .indexOf(): retorna o índice do alvo.

    $phrase = 'A repetição é a mãe da retenção.';
    $search = 'mãe';

    $q = strpos($phrase, $search);

    var_dump($q);

    echo "<br/> A palavra '$search' está na posilção $q"; 

    $substring01 = substr($phrase, 0, $q);
    $substring02 = substr($phrase, $q);

    echo "<br/> '$substring01...'"; 
    echo "<br/> '...$substring02'"; 

?>