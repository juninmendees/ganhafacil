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



// Matriz com todos os numeros especiais
$blocoEspecial = array("05", "06", "07", "12", "13", "14", "19", "20", "21");

// Matriz com todos os numeros gerais
$blocoGeral = array("01","02","03","04","08","09","10","11","15","16","17","18","22","23","24","25");

// Definindo o número de possibilidades
$numPossibilidadesBlocoEspecial = sizeof($blocoEspecial);
$numPossibilidadesBlocoGeral = sizeof($blocoGeral);


$QuantidadeNumerosBilhete = 15;
$QuantidadeNumerosBlocoEspecial = $_POST["padraoSorteioNumerosEspeciais"];
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



 if ( $QuantidadeNumerosBlocoEspecial == 5 ) {
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
        if ( $sorteado[3] == $sorteado[1] || 
             $sorteado[3] == $sorteado[2] ) {
            --$i;
        }
    }

     # Quatro Numeros
    for ($i = 1; $i < 2; $i++) {
        $sorteado[4] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];
        // Caso o ganhador já tenha saido, sorteia novamente.
        if ( $sorteado[4] == $sorteado[3] || 
             $sorteado[4] == $sorteado[2] || 
             $sorteado[4] == $sorteado[1] ) {
            --$i;
        }
    }

         # Quinto Numeros
    for ($i = 1; $i < 2; $i++) {
        $sorteado[5] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];
        // Caso o ganhador já tenha saido, sorteia novamente.
        if ( $sorteado[5] == $sorteado[4] || 
             $sorteado[5] == $sorteado[3] ||
             $sorteado[5] == $sorteado[2] ||
             $sorteado[5] == $sorteado[1] ) {
            --$i;
        }
    }
}
   

 if ( $QuantidadeNumerosBlocoEspecial == 6 ) {
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
        if ( $sorteado[3] == $sorteado[1] || 
             $sorteado[3] == $sorteado[2] ) {
            --$i;
        }
    }

     # Quatro Numeros
    for ($i = 1; $i < 2; $i++) {
        $sorteado[4] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];
        // Caso o ganhador já tenha saido, sorteia novamente.
        if ( $sorteado[4] == $sorteado[3] || 
             $sorteado[4] == $sorteado[2] || 
             $sorteado[4] == $sorteado[1] ) {
            --$i;
        }
    }

         # Quinto Numeros
    for ($i = 1; $i < 2; $i++) {
        $sorteado[5] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];
        // Caso o ganhador já tenha saido, sorteia novamente.
        if ( $sorteado[5] == $sorteado[4] || 
             $sorteado[5] == $sorteado[3] ||
             $sorteado[5] == $sorteado[2] ||
             $sorteado[5] == $sorteado[1] ) {
            --$i;
        }
    }

             # Sexto Numeros
    for ($i = 1; $i < 2; $i++) {
        $sorteado[6] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];
        // Caso o ganhador já tenha saido, sorteia novamente.
        if ($sorteado[6] == $sorteado[5] || 
            $sorteado[6] == $sorteado[4] || 
            $sorteado[6] == $sorteado[3] ||
            $sorteado[6] == $sorteado[2] ||
            $sorteado[6] == $sorteado[1] ) {
            --$i;
        }
    }
}


 if ( $QuantidadeNumerosBlocoEspecial == 7 ) {
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
        if ( $sorteado[3] == $sorteado[1] || 
             $sorteado[3] == $sorteado[2] ) {
            --$i;
        }
    }

     # Quatro Numeros
    for ($i = 1; $i < 2; $i++) {
        $sorteado[4] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];
        // Caso o ganhador já tenha saido, sorteia novamente.
        if ( $sorteado[4] == $sorteado[3] || 
             $sorteado[4] == $sorteado[2] || 
             $sorteado[4] == $sorteado[1] ) {
            --$i;
        }
    }

         # Quinto Numeros
    for ($i = 1; $i < 2; $i++) {
        $sorteado[5] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];
        // Caso o ganhador já tenha saido, sorteia novamente.
        if ( $sorteado[5] == $sorteado[4] || 
             $sorteado[5] == $sorteado[3] ||
             $sorteado[5] == $sorteado[2] ||
             $sorteado[5] == $sorteado[1] ) {
            --$i;
        }
    }

             # Sexto Numeros
    for ($i = 1; $i < 2; $i++) {
        $sorteado[6] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];
        // Caso o ganhador já tenha saido, sorteia novamente.
        if ($sorteado[6] == $sorteado[5] || 
            $sorteado[6] == $sorteado[4] || 
            $sorteado[6] == $sorteado[3] ||
            $sorteado[6] == $sorteado[2] ||
            $sorteado[6] == $sorteado[1] ) {
            --$i;
        }
    }

        for ($i = 1; $i < 2; $i++) {
        $sorteado[7] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];
        // Caso o ganhador já tenha saido, sorteia novamente.
        if ($sorteado[7] == $sorteado[6] || 
            $sorteado[7] == $sorteado[5] || 
            $sorteado[7] == $sorteado[4] || 
            $sorteado[7] == $sorteado[3] ||
            $sorteado[7] == $sorteado[2] ||
            $sorteado[7] == $sorteado[1] ) {
            --$i;
        }
    }
}


 if ( $QuantidadeNumerosBlocoEspecial == 8 ) {
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
        if ( $sorteado[3] == $sorteado[1] || 
             $sorteado[3] == $sorteado[2] ) {
            --$i;
        }
    }

     # Quatro Numeros
    for ($i = 1; $i < 2; $i++) {
        $sorteado[4] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];
        // Caso o ganhador já tenha saido, sorteia novamente.
        if ( $sorteado[4] == $sorteado[3] || 
             $sorteado[4] == $sorteado[2] || 
             $sorteado[4] == $sorteado[1] ) {
            --$i;
        }
    }

         # Quinto Numeros
    for ($i = 1; $i < 2; $i++) {
        $sorteado[5] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];
        // Caso o ganhador já tenha saido, sorteia novamente.
        if ( $sorteado[5] == $sorteado[4] || 
             $sorteado[5] == $sorteado[3] ||
             $sorteado[5] == $sorteado[2] ||
             $sorteado[5] == $sorteado[1] ) {
            --$i;
        }
    }

             # Sexto Numeros
    for ($i = 1; $i < 2; $i++) {
        $sorteado[6] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];
        // Caso o ganhador já tenha saido, sorteia novamente.
        if ($sorteado[6] == $sorteado[5] || 
            $sorteado[6] == $sorteado[4] || 
            $sorteado[6] == $sorteado[3] ||
            $sorteado[6] == $sorteado[2] ||
            $sorteado[6] == $sorteado[1] ) {
            --$i;
        }
    }

        for ($i = 1; $i < 2; $i++) {
        $sorteado[7] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];
        // Caso o ganhador já tenha saido, sorteia novamente.
        if ($sorteado[7] == $sorteado[6] || 
            $sorteado[7] == $sorteado[5] || 
            $sorteado[7] == $sorteado[4] || 
            $sorteado[7] == $sorteado[3] ||
            $sorteado[7] == $sorteado[2] ||
            $sorteado[7] == $sorteado[1] ) {
            --$i;
        }
    }

            for ($i = 1; $i < 2; $i++) {
        $sorteado[8] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];
        // Caso o ganhador já tenha saido, sorteia novamente.
        if ($sorteado[8] == $sorteado[7] || 
            $sorteado[8] == $sorteado[6] || 
            $sorteado[8] == $sorteado[5] || 
            $sorteado[8] == $sorteado[4] || 
            $sorteado[8] == $sorteado[3] ||
            $sorteado[8] == $sorteado[2] ||
            $sorteado[8] == $sorteado[1] ) {
            --$i;
        }
    }
}

 if ( $QuantidadeNumerosBlocoEspecial == 9 ) {
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
        if ( $sorteado[3] == $sorteado[1] || 
             $sorteado[3] == $sorteado[2] ) {
            --$i;
        }
    }

     # Quatro Numeros
    for ($i = 1; $i < 2; $i++) {
        $sorteado[4] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];
        // Caso o ganhador já tenha saido, sorteia novamente.
        if ( $sorteado[4] == $sorteado[3] || 
             $sorteado[4] == $sorteado[2] || 
             $sorteado[4] == $sorteado[1] ) {
            --$i;
        }
    }

         # Quinto Numeros
    for ($i = 1; $i < 2; $i++) {
        $sorteado[5] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];
        // Caso o ganhador já tenha saido, sorteia novamente.
        if ( $sorteado[5] == $sorteado[4] || 
             $sorteado[5] == $sorteado[3] ||
             $sorteado[5] == $sorteado[2] ||
             $sorteado[5] == $sorteado[1] ) {
            --$i;
        }
    }

             # Sexto Numeros
    for ($i = 1; $i < 2; $i++) {
        $sorteado[6] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];
        // Caso o ganhador já tenha saido, sorteia novamente.
        if ($sorteado[6] == $sorteado[5] || 
            $sorteado[6] == $sorteado[4] || 
            $sorteado[6] == $sorteado[3] ||
            $sorteado[6] == $sorteado[2] ||
            $sorteado[6] == $sorteado[1] ) {
            --$i;
        }
    }

        for ($i = 1; $i < 2; $i++) {
        $sorteado[7] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];
        // Caso o ganhador já tenha saido, sorteia novamente.
        if ($sorteado[7] == $sorteado[6] || 
            $sorteado[7] == $sorteado[5] || 
            $sorteado[7] == $sorteado[4] || 
            $sorteado[7] == $sorteado[3] ||
            $sorteado[7] == $sorteado[2] ||
            $sorteado[7] == $sorteado[1] ) {
            --$i;
        }
    }

            for ($i = 1; $i < 2; $i++) {
        $sorteado[8] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];
        // Caso o ganhador já tenha saido, sorteia novamente.
        if ($sorteado[8] == $sorteado[7] || 
            $sorteado[8] == $sorteado[6] || 
            $sorteado[8] == $sorteado[5] || 
            $sorteado[8] == $sorteado[4] || 
            $sorteado[8] == $sorteado[3] ||
            $sorteado[8] == $sorteado[2] ||
            $sorteado[8] == $sorteado[1] ) {
            --$i;
        }
    }

                for ($i = 1; $i < 2; $i++) {
        $sorteado[9] = $blocoEspecial[rand(0, $numPossibilidadesBlocoEspecial - 1)];
        // Caso o ganhador já tenha saido, sorteia novamente.
        if ($sorteado[9] == $sorteado[8] || 
            $sorteado[9] == $sorteado[7] ||
            $sorteado[9] == $sorteado[6] || 
            $sorteado[9] == $sorteado[5] || 
            $sorteado[9] == $sorteado[4] || 
            $sorteado[9] == $sorteado[3] ||
            $sorteado[9] == $sorteado[2] ||
            $sorteado[9] == $sorteado[1] ) {
            --$i;
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
if ( isset($sorteado[5]) ) {
  echo $sorteado[5]. " - "; 
}

if ( isset($sorteado[6]) ) {
  echo $sorteado[6]. " - "; 
}
if ( isset($sorteado[7]) ) {
  echo $sorteado[7]. " - "; 
}
if ( isset($sorteado[8]) ) {
  echo $sorteado[8]. " - "; 
}
if ( isset($sorteado[9]) ) {
  echo $sorteado[9]. " - "; 
}



//SORTEIO DOS NUMEROS DO BLOCO GERAL

for ($i=0; $i < ($QuantidadeNumerosBilhete - $QuantidadeNumerosBlocoEspecial) ; $i++) { 
    $numeroGeralSorteado[$i] = $blocoGeral[rand(0, $numPossibilidadesBlocoGeral - 1)];
       foreach ($numeroGeralSorteado as  $value) {
           if ($numeroGeralSorteado ==) {
               # code...
           }
       }

    echo $numeroGeralSorteado[$i]." - ";
}

?>

</body>

</html>