<?php
// ===== Exemplos de operadores matemáticos no PHP =====

// Declaração de variáveis
$a = 10;
$b = 3;

// Operadores básicos
$soma = $a + $b;
$subtracao = $a - $b;
$multiplicacao = $a * $b;
$divisao = $a / $b;
$modulo = $a % $b;
$exponenciacao = $a ** $b; // a elevado a b

// Incremento e decremento
$incremento = $a; 
$incremento++; // adiciona 1

$decremento = $b;
$decremento--; // subtrai 1

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Matemáticos em PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        header {
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #444;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <header>
        <h1>Exemplos de Operadores Matemáticos em PHP</h1>
    </header>

    <table>
        <tr>
            <th>Operação</th>
            <th>Expressão</th>
            <th>Resultado</th>
        </tr>
        <tr>
            <td>Soma</td>
            <td>$a + $b</td>
            <td><?php echo $soma; ?></td>
        </tr>
        <tr>
            <td>Subtração</td>
            <td>$a - $b</td>
            <td><?php echo $subtracao; ?></td>
        </tr>
        <tr>
            <td>Multiplicação</td>
            <td>$a * $b</td>
            <td><?php echo $multiplicacao; ?></td>
        </tr>
        <tr>
            <td>Divisão</td>
            <td>$a / $b</td>
            <td><?php echo $divisao; ?></td>
        </tr>
        <tr>
            <td>Módulo (resto da divisão)</td>
            <td>$a % $b</td>
            <td><?php echo $modulo; ?></td>
        </tr>
        <tr>
            <td>Exponenciação</td>
            <td>$a ** $b</td>
            <td><?php echo $exponenciacao; ?></td>
        </tr>
        <tr>
            <td>Incremento</td>
            <td>$incremento++</td>
            <td><?php echo $incremento; ?></td>
        </tr>
        <tr>
            <td>Decremento</td>
            <td>$decremento--</td>
            <td><?php echo $decremento; ?></td>
        </tr>
    </table>
</body>
</html>
