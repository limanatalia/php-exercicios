<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    <?php

        $contasCorrentes = [
           1234867812 => [
            'titular'=> 'Vinicius',
            'saldo'=>1000
        ], 
           8766554436 => [
            'titular'=> 'Maria',
            'saldo'=>10000
        ], 
           7654348765 => [
            'titular'=> 'Alberto',
            'saldo'=>300
        ]
    ];

        foreach ($contasCorrentes as $cpf => $conta){
            echo $cpf . PHP_EOL;
        }
    ?>
</body>
</html>