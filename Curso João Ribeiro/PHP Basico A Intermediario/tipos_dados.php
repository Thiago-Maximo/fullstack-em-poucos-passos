<?php
// ===== Exemplos de tipos de dados no PHP =====

// String
$tipoString = '"Isto é uma string"';

// Inteiro (Integer)
$tipoInteiro = 42;

// Float (ou Double)
$tipoFloat = 3.14159;

// Boolean
$tipoBooleanVerdadeiro = true;
$tipoBooleanFalso = false;

// Array indexado
$tipoArrayIndexado = ["[Maçã", "Banana", "Laranja]"];

// Array associativo
$tipoArrayAssociativo = [
    "nome" => "Carlos",
    "idade" => 28
];

// Objeto (stdClass)
$tipoObjeto = new stdClass();
$tipoObjeto->marca = "Honda";
$tipoObjeto->modelo = "Civic";

// NULL
$tipoNull = null;

// Recurso (resource) - exemplo simples com abertura de arquivo
$tipoRecurso = fopen(__FILE__, "r");

// Constante
define("TIPO_CONSTANTE", "Eu sou uma constante");

// Fechar recurso para evitar vazamento
fclose($tipoRecurso);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Dados em PHP</title>
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
        <h1>Principais Tipos de Dados no PHP</h1>
    </header>

    <table>
        <tr>
            <th>Variável</th>
            <th>Tipo</th>
            <th>Valor</th>
        </tr>
        <tr>
            <td>$tipoString</td>
            <td><?php echo gettype($tipoString); ?></td>
            <td><?php echo $tipoString; ?></td>
        </tr>
        <tr>
            <td>$tipoInteiro</td>
            <td><?php echo gettype($tipoInteiro); ?></td>
            <td><?php echo $tipoInteiro; ?></td>
        </tr>
        <tr>
            <td>$tipoFloat</td>
            <td><?php echo gettype($tipoFloat); ?></td>
            <td><?php echo $tipoFloat; ?></td>
        </tr>
        <tr>
            <td>$tipoBooleanVerdadeiro</td>
            <td><?php echo gettype($tipoBooleanVerdadeiro); ?></td>
            <td><?php echo $tipoBooleanVerdadeiro ? "true" : "false"; ?></td>
        </tr>
        <tr>
            <td>$tipoBooleanFalso</td>
            <td><?php echo gettype($tipoBooleanFalso); ?></td>
            <td><?php echo $tipoBooleanFalso ? "true" : "false"; ?></td>
        </tr>
        <tr>
            <td>$tipoArrayIndexado</td>
            <td><?php echo gettype($tipoArrayIndexado); ?></td>
            <td><?php echo implode(", ", $tipoArrayIndexado); ?></td>
        </tr>
        <tr>
            <td>$tipoArrayAssociativo</td>
            <td><?php echo gettype($tipoArrayAssociativo); ?></td>
            <td><?php echo "Nome: {$tipoArrayAssociativo['nome']}, Idade: {$tipoArrayAssociativo['idade']}"; ?></td>
        </tr>
        <tr>
            <td>$tipoObjeto</td>
            <td><?php echo gettype($tipoObjeto); ?></td>
            <td><?php echo $tipoObjeto->marca . " " . $tipoObjeto->modelo; ?></td>
        </tr>
        <tr>
            <td>$tipoNull</td>
            <td><?php echo gettype($tipoNull); ?></td>
            <td>null</td>
        </tr>
        <tr>
            <td>TIPO_CONSTANTE</td>
            <td><?php echo gettype(TIPO_CONSTANTE); ?></td>
            <td><?php echo TIPO_CONSTANTE; ?></td>
        </tr>
    </table>
</body>
</html>
