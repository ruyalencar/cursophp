<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Calculando a sua idade</h1>

        <?php
        $ano1 = $_GET['ano'] ?? 0;
        $ano2 = $_GET['ano2'] ?? 0;
        ?>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="ano1">Em que ano você nesceu?</label>
            <input type="number" name="ano" id="anoid">
            <label for="">Quer saber a sua idade em que ano? Atualmente estamos no ano de <span id="anoAtual"></span></label>
            <input type="number" name="ano2" id="ano2id">
            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>
    <section>
        <h2><strong>Resultado</strong></h2>
        <?php
        $anoAtual = date("Y");
        $r =  $ano2 - $ano1;
        print "Quem nasceu em $ano1 vai ter <strong>$r anos</strong> em $ano2!";
        ?>
    </section>
    <script>
        // Obtém o ano atual usando JavaScript
        var dataAtual = new Date();
        var anoAtual = dataAtual.getFullYear();
        console.log({
            anoAtual
        })

        // Insere o ano atual no elemento com id "anoAtual"
        document.getElementById('anoAtual').textContent = anoAtual;
    </script>
</body>

</html>