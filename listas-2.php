<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $idadeList = [21, 23, 19, 25, 30, 41, 18];

        /*[] adiciona um novo item no final da lista sem precisar 
        contar o numero de elementos para adicionar um novo no indice */
        $idadeList[] = 20;
        
        foreach ($idadeList as $idade) {
            echo $idade . PHP_EOL;
        }
    ?>
</body>
</html>