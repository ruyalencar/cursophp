<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>

<body>
    <h1>
        Teste de tipos Primitivos
    </h1>
    <?php
    // 0x = hexadecimal 0b = binario 0 = Octal
    // $num = 010;
    // print "O valor da variavel é $num";

    // $v = 300;
    // var_dump($v);

    // $num = 3e2;   // 3e2 = 3 x 10(2)
    // print "O valor é $num ";
    // var_dump($num);

    // $num = (int) 3e2;   // (Coerção) = Da para mudar o tipo primitivo com a coeção no php
    // print "O valor é $num ";
    // var_dump($num);

    // $num = (float) "950"; //USAR SO (float) OU (double) que da no mesmo sempre sera (float)
    // var_dump($num);

    // $casado = true; // false; (bool) tipo primitivo boolean V/F
    // var_dump($casado); (Com o (var_dump) ele funciona normalmente, ja com o print ele não mostra vdd ou false, mostra nada(null) para false e (1) para verdadeiro )
    // print "o valor para casado é $casado";

    // $vet = [5, "neto", 6.55, 7e2, (string)-9, true]; // Array (arreys não podem ser empressos na tela com o print) (arrays aceitam varios tipos de variaveis) 
    // var_dump($vet)

    class Pessoa
    {
        private string $nome;
    }

    $p = new Pessoa;
    var_dump($p);

    ?>
</body>

</html>