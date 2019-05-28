<?php

function sorteiaNumerosGerais(){
    for ($i=0; $i < ($QuantidadeNumerosBilhete - $QuantidadeNumerosBlocoEspecial) ; $i++) { 
    $numeroGeralSorteado[$i] = $blocoGeral[rand(0, $numPossibilidadesBlocoGeral - 1)];

        if (array_key_exists($numeroGeralSorteado[$i], $numeroGeralSorteado)) {
            echo "Numero já existe no array geral";
        }
        
    $resultadoNumerosGeral[$i] = $numeroGeralSorteado[$i];

    echo $numeroGeralSorteado[$i]." - ";
}
}

?>