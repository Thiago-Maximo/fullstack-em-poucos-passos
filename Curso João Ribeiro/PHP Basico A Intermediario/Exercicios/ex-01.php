<?php

/*
    1. Criar a Variavel x igual a 100
    2. Criar a Variavel y igual a 150
    3. Apresenta o Resultado Da Adição das Duas Variaveis

    Resultado: 250
*/

$x = 100;
$y = 150;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exerecicio De Adição</title>

    <style>
        header{
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Exerecicio De Adição</h1>
    </header>

    <section>
        <p>A Adição da Variavel x + a Variavel y é: <?php echo $resultado = $x + $y; ?></p>
    </section>
</body>
</html>