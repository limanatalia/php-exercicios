<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>
    <?php

        $peso = 98;
        $altura = 1.74;
        $imc = $peso / $altura ** 2;

        echo "Seu IMC é de $imc. Você está com o IMC ";

        if ($imc < 18.5) {
            echo "abaixo";
        } elseif ($imc < 25) {
            echo "dentro";
        } else {
            echo "acima";
        }

        echo " do recomendado";
    ?>
</body>
</html>