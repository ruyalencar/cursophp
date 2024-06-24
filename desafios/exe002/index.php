<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <?php
        print "<strong>
            <p>Trabalhando com números aleatórios</p>
        </strong>";
        print "<p>Gerando um número aleatório entre 0 e 100...</p>";
        $n = mt_rand(0, 100);
        print "<p>o valor gerado foi <strong>$n</strong></p>";
        ?>
        <form method="POST">
            <button type="submit" name="botao">🔄️ Gerar outro</button>
    </section>
</body>

</html>