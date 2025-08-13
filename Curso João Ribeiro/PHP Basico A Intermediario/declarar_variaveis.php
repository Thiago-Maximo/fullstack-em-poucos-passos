<?php
// String
$nome = "Thiago";
$sobrenome = "Máximo";

// Inteiro (Integer)
$idade = 30;

// Número decimal (Float ou Double)
$altura = 1.75;

// Booleano
$maiorDeIdade = true;
$possuiCarteira = false;

// Array indexado
$cores = ["Vermelho", "Verde", "Azul"];

// Array associativo
$pessoa = [
    "nome" => "Ana",
    "idade" => 25,
    "cidade" => "São Paulo"
];

// Objeto (usando stdClass)
$carro = new stdClass();
$carro->marca = "Toyota";
$carro->modelo = "Corolla";
$carro->ano = 2020;

// NULL
$variavelNula = null;

// Constante (não pode ser alterada)
define("PI", 3.14159);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Declarar Variaveis Em PHP</title>

    <style>
        header{
            display:flex;
            justify-content: center;
        }
        section{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Aprendendo A Declarar Variaveis No PHP Procedural</h1>
    </header>

    <section>
        <p>O PHP é <strong>case-sensitive</strong>, ou seja, ele diferencia letras maiúsculas de minúsculas.</p>
        <p>Por exemplo: <code>$Nome = "Thiago";</code> e <code>$nome = "Máximo"</code> são duas variáveis diferentes.</p>
    </section>
    
    <section>
        <h3>Valor da variável <code>$nome</code>: <?php echo $nome; ?></h3>
        <h3>Idade: <?php echo $idade; ?></h3>
        <h3>Altura: <?php echo $altura; ?> m</h3>
        <h3>Maior de idade? <?php echo $maiorDeIdade ? "Sim" : "Não"; ?></h3>
        <h3>Primeira cor no array: <?php echo $cores[0]; ?></h3>
        <h3>Nome da pessoa (array associativo): <?php echo $pessoa["nome"]; ?></h3>
        <h3>Carro: <?php echo $carro->marca . " " . $carro->modelo; ?></h3>
        <h3>Valor de PI: <?php echo PI; ?></h3>
    </section>
</body>
</html>
