<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ganhafacil</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css\estilo.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


<?php
/*
 Criar função Sortear, que deve popular o array $resultado e imprimir na tela.
Essa função deve gerar a quantidade de numero informada na variavel $padraoApostaDefault
E completar com a quantidade de numeros do array $blocogeral até um total de 15 numeros

*/


// Matriz com todos os numeros especiais
$blocoEspecial = array("05", "06", "07", "12", "13", "14", "19", "20", "21");

// Matriz com todos os numeros gerais
$blocoEspecial = array("05", "06", "07", "12", "13", "14", "19", "20", "21");

// Definindo o número de possibilidades
$numPossibilidadesBlocoEspecial = sizeof($blocoEspecial);


$QuantidadeNumerosBilhete = 15;
$QuantidadeNumerosBlocoEspecial = 3;
$QuantidadeNumerosBlocoGeral = ($QuantidadeNumerosBilhete - $QuantidadeNumerosBlocoEspecial);

if ( $QuantidadeNumerosBlocoEspecial == 1 ) {
    $sorteado[1] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];
}
if ( $QuantidadeNumerosBlocoEspecial == 2 ) {
    # Primeiro ganhador
    $sorteado[1] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];

    # Segundo ganhador
    for ($i = 1; $i < 2; $i++) {
        $sorteado[2] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];
        // Caso o ganhador já tenha saido, sorteia novamente.
        if ( $sorteado[2] == $sorteado[1] ) {
            --$i;
        }
    }
}


if ( $QuantidadeNumerosBlocoEspecial == 3 ) {
    # Primeiro ganhador
    $sorteado[1] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];

    # Segundo ganhador
    for ($i = 1; $i < 2; $i++) {
        $sorteado[2] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];
        // Caso o ganhador já tenha saido, sorteia novamente.
        if ( $sorteado[2] == $sorteado[1] ) {
            --$i;
        }
    }

    # Terceiro ganhador
    for ($i = 1; $i < 2; $i++) {
        $sorteado[3] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];
        // Caso o ganhador já tenha saido, sorteia novamente.
        if ( $sorteado[3] == $sorteado[1] || $sorteado[3] == $sorteado[2] ) {
            --$i;
        }
    }
}


if ( $QuantidadeNumerosBlocoEspecial == 4 ) {
	$contador = 1;


# Um Numero
    $sorteado[1] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];

    # Dois Numeros
    for ($i = 1; $i < 2; $i++) {
        $sorteado[2] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];
        // Caso o ganhador já tenha saido, sorteia novamente.
        if ( $sorteado[2] == $sorteado[1] ) {
            --$i;
        }
    }

    # Três Numeros
    for ($i = 1; $i < 2; $i++) {
        $sorteado[3] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];
        // Caso o ganhador já tenha saido, sorteia novamente.
        if ( $sorteado[3] == $sorteado[1] || $sorteado[3] == $sorteado[2] ) {
            --$i;
        }
    }

     # Quatro Numeros
    for ($i = 1; $i < 2; $i++) {
        $sorteado[4] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];
        // Caso o ganhador já tenha saido, sorteia novamente.
        if ( $sorteado[4] == $sorteado[3] || $sorteado[2] == $sorteado[1] ) {
            $sorteado[4] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];
            //--$i;
        }
    }
}



    


//Exibindo ganhadores
echo "<b>Numeros Sorteados:</b> <br />";

if ( isset($sorteado[1]) ) {
    echo $sorteado[1]. " - "; 
}

if ( isset($sorteado[2]) ) {
    echo $sorteado[2]. " - "; 
}
if ( isset($sorteado[3]) ) {
   echo $sorteado[3]. " - "; 
}
if ( isset($sorteado[4]) ) {
  echo $sorteado[4]. " - "; 
}

?>

</body>

</html>