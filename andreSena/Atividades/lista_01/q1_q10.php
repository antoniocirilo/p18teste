<!DOCTYPE html>
<html lang="br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    echo "<p>É preciso fazer todos os aogoritimos</p>"."<p> para aprender Python</p>";

    $ifrn = "Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Norte";
    echo $ifrn;

    $num1 = 10;
    echo "<p>O númeor armazenado é:".$num1."</p>";

    $num2 = 30;
    echo "<p>".($num2*2)."</p>";

    $numerador = 20;
    $denominador = 10;
    echo "<p>".($numerador/$denominador)."</p>";

    $peso = 60;
    $altura = 1.60;
    $imc = ($peso/($altura^2));
    echo "<p>IMC=".$imc."</p>";

    $nota1 = 80;
    $nota2 = 50;
    $nota3 = 60;
    $media = (($nota1+$nota2+$nota3)/3);
    echo "Média=".$media."</br>";

    $varInt = 100;
    echo "15% de ".$varInt." é=".($varInt*0.15)."</br>";

    $preco = 200;
    $desconto = 0.15;
    $valorFin = ($preco-($preco*$desconto));
    echo "O preço final é:".$valorFin."</br>";

    $seuSal = 400;
    $salNom = 800;
    echo "Você tem ".($seuSal/$salNom)." salários mínimos.";


    ?>
  </body>
</html>
