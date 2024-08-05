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
        $seg = $_GET['s1'];
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $segundos = intval($_GET['s1']);

            $semanas = intval($seg / (7 * 24 * 3600));
            $segundos %= 7 * 24 * 3600;

            $dias = floor($segundos / (24 * 3600));
            $segundos %= 24 * 3600;

            $horas = floor($segundos / 3600);
            $segundos %= 3600;

            $minutos = floor($segundos / 60);
            $segundos %= 60;

            print "<p>Analisando o calor que digitou, $seg segundos equivalem a um total de:</p>";
            print "<lu>";
            print "<li>$semanas semanas</li>";
            print "<li>$dias dias</li>";
            print "<li>$horas horas</li>";
            print "<li>$minutos minutos</li>";
            print "<li>$segundos segundos</li>";
            print "</lu>";
        }
        ?>


    </section>
</body>

</html>