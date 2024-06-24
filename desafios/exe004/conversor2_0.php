<!DOCTYPE html>
<html lang="pt-br">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado da conversão</title>
        <link rel="stylesheet" href="style.css">
</head>

<body>
        <main>
                <h1>Conversor de Moedas v2.0</h1>
                <?php
                function converterRealParaDolar($valorEmReal, $cotacao)
                {
                        // Calcula o valor em Dólar
                        $valorEmDolar = $valorEmReal / $cotacao;
                        // Retorna o valor formatado para 2 casas decimais
                        return ($valorEmDolar);
                }
                $inicio = date("m-d-Y", strtotime("-7 days"));
                $fim = date("m-d-Y");


                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

                $dados = json_decode(file_get_contents($url), true);

                $cotacao = $dados["value"][0]["cotacaoCompra"];

                $valorEmReal = $_GET["valor"] ?? 0;

                $valorEmDolar = converterRealParaDolar($valorEmReal, $cotacao);

                $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                print "<p><strong>Seus " . numfmt_format_currency($padrão, $valorEmReal, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $valorEmDolar, "USD") . " ($fim)</strong></p>";

                print "<p><strog>* Cotação de " . numfmt_format_currency($padrão, $cotacao, "BRL") . " Retirado de https://www.bcb.gov.br/</strog></p>"

                ?>
                <form action="index.html" method="post">
                        <input type="submit" value="⬅️ Voltar ">
        </main>
        </main>

</body>

</html>