<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 1 - Escrever Código PHP</title>



    <style>
        header{
            display: flex;
            justify-content: center;
            align-items: center;
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
        <h1>Aula 1 - Escrever Código PHP</h1>
    </header>

    <section>
        <p> o PHP Deixa inserir código html dentro dele Porém caso você queira utilizar o código PHP tem que usar a Abertura de Chaves</p>
        <p name="bloco_php"> Utilizando assim; &lt;?php ?&gt;</p> <!---Para o Navegador/Servidor não interpretar o Bloco de Código PhP eu utilizei os &lt;?php ?&gt; Assim ele fica como se fosse texto-->
    </section>

<script>

    var blocoo_php = document.getElementsByName('bloco_php');
    blocoo_php.syle.InnerHtml = "<?php ?>"
</script>
</body>
</html>
