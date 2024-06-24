<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings em PHP</title>
</head>

<body>
    <h1>
        Strings em PHP
    </h1>
    <?php
    // const ADORO = "BATATINHAS 🍟";    // para adicionar uma constante (const) necessario usar o (.) operador de concatenação
    // $nome = "Neto";    // ("")quando voce quer que imterprete os esta digitando e ('') quando so mostrar oq esta escrito 
    // $sobrenome = "camargo";
    // print "Óla $nome $sobrenome 🐘!";
    // print 'Óla $nome $sobrenome !';
    // print "EU AMO ADORO";
    // print ' EU AMO ADORO ';
    // print " EU AMO " . ADORO;
    // print " Estamos no ano de " . date('Y');
    $nome = "Rodrigo";
    $snome = "Nogueira 🥊";
    $luta = "6 vezes campeao";
    // print "$nome\" Minotauro \"$snome \n\t $luta";   // (\) É usado como sequencia de escape como tambem ( \n(Nova Linha), \t(Tabulaçao horizontal),    \\(Barra ivertida), \$(Sinal de cifrão), \u{}(Codepoint Unicode) )

    //Sintaxe heredoc
    print <<< FRASE
    $nome "Minotauro" $snome
    $luta 🏆
    FRASE;

    //Sintaxe Nowdoc ('') quando so mostrar oq esta escrito 
    print <<< 'FRASE'
     $nome "Minotauro" $snome
     $luta 🏆
     FRASE;

    ?>
</body>

</html>