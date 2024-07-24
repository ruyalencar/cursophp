<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 09</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php
        $n1 = $_GET['n1'] ?? 0;
        $n2 = $_GET['n2'] ?? 0;
        $p1 = $_GET['p1'] ?? 0;
        $p2 = $_GET['p2'] ?? 0;
        function mediaPonderada($n1, $n2, $p1, $p2)
        {
            $v1 = $n1 * $p1;
            $v2 = $n2 * $p2;
            $v3 = $v1 + $v2;
            $v4 = $p1 + $p2;
            $r = $v3 / $v4;
            return ($r);
        }
        ?>
        <h1><strong>Médias Aritméticas</strong></h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nota1">1° Valor</label>
            <input type="number" name="n1" id="n1id">
            <label for="nota1">1° Peso</label>
            <input type="number" name="p1" id="p1id">
            <label for="nota1">2° Valor</label>
            <input type="number" name="n2" id="n2id">
            <label for="nota1">2° Peso</label>
            <input type="number" name="p2" id="p2id">
            <input type="submit" value="Calcular Médias">
        </form>

    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php
        $s = number_format(($n1 + $n2) / 2, 2, ",", ".");
        $mp = number_format(mediaPonderada($n1, $n2, $p1, $p2), 2, ",", ".");

        print "Analisando os valores $n1 e $n2:";
        print "<ul>";
        print "<li>A <strong>Média Aritmética Semples</strong> entre os valores é igual a $s </li>";
        print "<li>A <strong>Média Aritmética Ponderada</strong> com pesos $p1 e $p2 é igual a $mp</li>";
        print "</ul>";
        ?>
    </section>
</body>

</html>