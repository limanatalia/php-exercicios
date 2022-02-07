<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contas Correntes</title>
</head>
<body>
    <?php

        $conta1 = [
            'titular'=> 'Vinicius',
            'saldo'=>1000
        ];

        $conta2 = [
            'titular'=> 'Maria',
            'saldo'=>10000
        ];

        $conta3 = [
            'titular'=> 'Alberto',
            'saldo'=>300
        ];

        $contasCorrentes = [$conta1, $conta2, $conta3];

        $contasCorrentes = [$conta1, $conta2, $conta3];

        for ($i = 0; $i < count($contasCorrentes); $i++) {
            echo $contasCorrentes[$i]['titular'] . PHP_EOL;

}
    ?>
</body>
</html>