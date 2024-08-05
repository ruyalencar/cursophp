<!DOCTYPE html>
<html lang="pr=br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 07</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $sm = 1412;
    $salario = $_GET['sa1'] ?? 0;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Salário</label>
            <input type="number" name="sa1" id="idsa1" value="<?= $salario ?>" step=" 0.001">
            <p>considerando o salário mínimo de <strong>R$<?= number_format($sm, 2, ",", ".") ?></strong> </p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php
        $total = intdiv($salario, $sm);
        $resto = $salario % $sm;
        print "Quem recebe um salário de R$" . number_format($salario, 2, ",", ".") . " <strong>ganha $total salários mínimos</strong> + R$" . number_format($resto, 2, ",", ".") . ".";
        ?>
    </section>
</body>

</html>