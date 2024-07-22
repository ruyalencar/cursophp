<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 06</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $dividendo = $_GET['dd1'] ?? 0;
    $divisor = $_GET['ds1'] ?? 0;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dd1" id="iddd1" value="<?= $dividendo ?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="ds1" id="idds1" value="<?= $divisor ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="Divisão">
        <h2>Estrutura da Divisão</h2>
        <?php
        $divi = $dividendo / $divisor;
        $res = $dividendo % $divisor;
        print "Dividendo =" . number_format($dividendo);
        print " Divisor =" . number_format($divisor);
        print " Quociente =" .  number_format($divi);
        print " Resto =" . number_format($res);

        ?>

    </section>
</body>

</html>