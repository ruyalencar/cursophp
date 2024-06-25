<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Desafio5</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <main>
            <h1>Analisador de Número Real</h1>
            <?php
            $numeroReal = $_REQUEST["numr"] ?? 0;
            $parteInteira = number_format(intval($numeroReal, 0), 0, ",", ".");
            $parteFracionaria = number_format(fmod($numeroReal, 1), 3, ",", ".");


            print "<p>Analisando o número <strong> " . number_format($numeroReal, 3, ",", ".") . "</strong> informado pelo usuário:</p>";

            print "<ul><li>A parte inteiro do numero é <strong>$parteInteira</strong></li>
            <li>A parte fracionária do número é <strong>$parteFracionaria</strong></li></ul>";
            ?>
            <form action="index.html" method="post">
                <input type="submit" value="Voltar">
        </main>
    </header>
</body>

</html>