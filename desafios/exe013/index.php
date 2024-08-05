<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>

<body>
    <main>
        <h1>Caixa Eletrônico</h1>
        <?php
        $valor = $_POST['valor'];

        ?>
        <form action="" method="post">
            <label for="Caixa">Qual valor você deseja sacar?</label>
            <input type="number" name="valor" id="valor" min="5" value="<?= $valor ?>" required>
            <label for="Notas">Notas disponíveis: R$100, R$50, R$10 e R$5</label>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de R$<?= number_format($valor, 2, ",", ".") ?></h2>
        <?php


        $sobra = $valor;

        $cemReais = floor($sobra / 100);
        $sobra %= 100;

        $cinquentaReais = floor($sobra / 50);
        $sobra %= 50;

        $dezReais = floor($sobra / 10);
        $sobra %= 10;

        $cincoReais = floor($sobra / 5);
        $sobra %= 5;
        ?>
        <p>O caixa eletrónico ce te entregar as seguintes notas: </p>
        <lu>
            <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x<?= $cemReais ?></li>
            <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x<?= $cinquentaReais ?></li>
            <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> x<?= $dezReais ?></li>
            <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"> x<?= $cincoReais ?></li>
            <li><img src="imagens/1-real.jpg" alt="Nota de 1" class="nota"> x<?= $sobra ?></li>
        </lu>
    </section>
</body>

</html>