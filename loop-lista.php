<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Lista</title>
</head>
<body>
    <?php
        $idadeList = [21, 23, 19, 25, 30, 41, 18, 32];

        for ($i = 0; $i < 8; $i++){         //ou  for ($i = 0; $i < count($idadeList); $i++) { 
            echo $idadeList[$i] . PHP_EOL; // conta todos os numeros da lista sem precisar informar a quantidade.  
        }
    ?>
</body>
</html>