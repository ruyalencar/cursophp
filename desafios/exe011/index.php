<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>
        <?php
        $p = $_GET['preco'] ?? 0;
        $porcent = $_GET['porcen'] ?? 0;
        ?>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco">Preço do Produto</label>
            <input type="number" name="preco" id="precoid" value="<?= $p ?>" step="0.001">
            <label for="reajuste">Qual será o porcentual de reajuste? <strong><span id="valorPorcentagem">50%</span></strong></label>
            <input type="range" name="porcen" id="porcenid" min="-100" max="100" value="<?= $porcent ?>" oninput="atualizarValor(this.value)">
            <script>
                function atualizarValor(valor) {
                    document.getElementById('valorPorcentagem').textContent = valor + '%';
                }
            </script>
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php
        function ReajustePositivo($p, $porcent)
        {
            return $p * (1 + $porcent / 100);
        }
        function ReajusteNegativo($p, $porcent)
        {
            return $p * (1 - abs($porcent) / 100);
        }


        if ($porcent > 0) {
            $reajuste = ReajustePositivo($p, $porcent);
            $texto = "O produto que custava R$" . number_format($p, 2, ",", ".") . ", com <strong>$porcent% de aumento</strong> vai passar a custar R$" . number_format($reajuste, 2, ",", ".") . "  a partir de agora. ";
        } elseif ($porcent < 0) {
            $reajuste = ReajusteNegativo($p, $porcent);
            $texto = "O produto que custava R$" . number_format($p, 2, ",", ".") . ", com o desconto de <strong>$porcent% </strong> vai passar a custar R$" . number_format($reajuste, 2, ",", ".") . "  a partir de agora.";
        } else {
            return "O preço do produto permanece o mesmo.";
        }
        print $texto;
        ?>
    </section>

</body>

</html>