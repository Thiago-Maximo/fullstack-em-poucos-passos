<?php

/*
    1. Define a variavel "numero" com o valor igual a 50
    2. Apresenta a Multiplicação desse valor por 4 unidades

    Resultado: 200
*/

$numero = 50;
$unidades = 4;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exerecicio De Multiplicação</title>

    <style>
        header{
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Exerecicio De Multiplicação</h1>
    </header>

    <section>
        <p>A Multiplicação da Variavel "numero" x a Variavel "unidades" é: <?php echo $resultado = $numero * $unidades; ?></p>
    </section>
</body>
</html>