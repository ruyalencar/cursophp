<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php
        function converterRealParaDolar($valorEmReal, $valorFixa)
        {
            // Calcula o valor em Dólar
            $valorEmDolar = $valorEmReal / $valorFixa;

            // Retorna o valor formatado para 2 casas decimais
            return ($valorEmDolar);
        }
        $valorFixa = 5.42;
        $valorEmReal = $_GET["valor"] ?? 0;
        $valorEmDolar = converterRealParaDolar($valorEmReal, $valorFixa);
        $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        print "Seus " . numfmt_format_currency($padrão, $valorEmReal, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $valorEmDolar, "USD");
        print "<p><strog>* Cotação fixa de $valorFixa  informada diretamente no código.</strog></p>"
        ?>
        <form action="index.html" method="post">
            <input type="submit" value="⬅️ Voltar ">
    </main>

</body>

</html>