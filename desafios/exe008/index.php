<!DOCTYPE html>
<html lang="pt=br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 08</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $num = $_GET['num'] ?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="num" id="numid" value="<?= $num ?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php
        $qua = number_format($num ** (1 / 2), 3, ",", ".");
        $cub = number_format($num ** (1 / 3), 3, ",", ".");
        print "<ul>";
        print "<li>A sua raiz quadrada é $qua  </li>";
        print "<li>A sua raiz cúbica é $cub</li>";
        print "</ul>";
        ?>
    </section>

</body>

</html>