<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resoltado do desafio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>

        <?php
        $numero = $_GET["numero"] ?? 0;
        $r1 = $numero + 1;
        $r2 = $numero - 1;
        print "<p>O numero escolhido foi <strong>$numero</strong></p>";
        print "<p>O seu antecessor é $r2</p>";
        print "<p>O seu sucessor é $r1</p>";
        ?>
        <form action="index.html" method="post">
            <input type="submit" value="⬅️ Voltar ">
    </main>
</body>

</html>