<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>

    <?php
        $multiplicador = 3;

        for ($i = 1; $i <= 10; $i++) {
        $resultado = $multiplicador * $i;
        echo "$multiplicador x $i = $resultado" . PHP_EOL;
        }
    ?>
</body>
</html>