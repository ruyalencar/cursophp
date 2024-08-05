<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php
        $seg = $_GET['s1'] ?? 0;
        ?>
        <h1>Calculadora de Tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="Segundos">Qual é o total de segundos?</label>
            <input type="number" name="s1" id="s1id" min="1" required value="<?= $seg ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?php
        $sobra = $seg;

        $semanas = (int)($sobra / 604_800);
        $sobra = $sobra % 604_800;

        $dias = (int)($sobra / 86_400);
        $sobra = $sobra % 86_400;

        $horas = (int)($sobra / 3_600);
        $sobra = $sobra % 3_600;

        $minutos = (int)($sobra / 60);
        $sobra = $sobra % 60;

        print "<p>Analisando o calor que digitou,<strong>" . number_format($seg, 0, ",", ".") . " segundos</strong> equivalem a um total de:</p>";
        print "<lu>";
        print "<li>$semanas semanas</li>";
        print "<li>$dias dias</li>";
        print "<li>$horas horas</li>";
        print "<li>$minutos minutos</li>";
        print "<li>$sobra segundos</li>";
        print "</lu>";

        ?>


    </section>
</body>

</html>