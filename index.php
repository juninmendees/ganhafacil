<?php
/*
 Criar função Sortear, que deve popular o array $resultado e imprimir na tela.
Essa função deve gerar a quantidade de numero informada na variavel $padraoApostaDefault
E completar com a quantidade de numeros do array $blocogeral até um total de 15 numeros

*/


// Matriz com todos os numeros especiais
$blocoEspecial = array("05", "06", "07", "12", "13", "14", "19", "20", "21");

// Definindo o número de possibilidades
$numPossibilidades = sizeof($blocoEspecial);


// Sorteando

//$QuantidadeNumerosBlocoEspecial=3;

if ( $QuantidadeNumerosBlocoEspecial = 1 ) {
    echo "Passou aqui";
    $sorteado[1] = $blocoEspecial[rand(0, $numPossibilidades - 1)];
} elseif ( $QuantidadeNumerosBlocoEspecial = 2 ) {
    # Primeiro ganhador
    $sorteado[1] = $blocoEspecial[rand(0, $numPossibilidades - 1)];

    # Segundo ganhador
    for ($i = 1; $i < 2; $i++) {
        $sorteado[2] = $blocoEspecial[rand(0, $numPossibilidades - 1)];
        // Caso o ganhador já tenha saido, sorteia novamente.
        if ( $sorteado[2] == $sorteado[1] ) {
            --$i;
        }
    }
} elseif ( $QuantidadeNumerosBlocoEspecial = 3 ) {
    # Primeiro ganhador
    $sorteado[1] = $blocoEspecial[rand(0, $numPossibilidades - 1)];

    # Segundo ganhador
    for ($i = 1; $i < 2; $i++) {
        $sorteado[2] = $blocoEspecial[rand(0, $numPossibilidades - 1)];
        // Caso o ganhador já tenha saido, sorteia novamente.
        if ( $sorteado[2] == $sorteado[1] ) {
            --$i;
        }
    }

    # Terceiro ganhador
    for ($i = 1; $i < 2; $i++) {
        $sorteado[3] = $blocoEspecial[rand(0, $numPossibilidades - 1)];
        // Caso o ganhador já tenha saido, sorteia novamente.
        if ( $sorteado[3] == $sorteado[1] || $sorteado[3] == $sorteado[2] ) {
            --$i;
        }
    }
}


//Exibindo ganhadores
echo "<b>Numeros Sorteados:</b> <br />";
echo "<b>1°</b> - " . $sorteado[1] . "<br />";
echo "<b>1°</b> - " . $sorteado[2] . "<br />";
echo "<b>1°</b> - " . $sorteado[3] . "<br />";


?>