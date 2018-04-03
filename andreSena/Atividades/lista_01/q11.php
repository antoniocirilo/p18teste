<!DOCTYPE html>
<html lang="br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    if(!(isset($_GET["q3"]) && isset($_GET["q4"]) &&
    isset($_GET["q5_1"]) && isset($_GET["q5_2"]) &&
    isset($_GET["q6_1"]) && isset($_GET["q6_2"])
  && isset($_GET["q7_1"]) && isset($_GET["q7_2"]) &&
  isset($_GET["q7_3"]) && isset($_GET["q8"])
&& isset($_GET["q9"]) && isset($_GET["q10"]))) {
      echo "<p>Alguma informação está em faltando.</p>";
    } else{
      $nome = $_GET["q3"];
      echo "<p>O número armazenado é: ".$nome."</p>";

      $mult = $_GET["q4"];
      echo "<p>O resultado da multiplicação é: ".($mult*2)."</p>";

      $numerador = $_GET["q5_1"];
      $denominador = $_GET["q5_2"];
      echo "<p>O resultado da fração é: ".($numerador/$denominador)."</p>";

      $peso = $_GET["q6_1"];
      $altura = $_GET["q6_2"];
      $imc = ($peso/($altura^2));
      echo "<p>Seu IMC é: ".$imc."</p>";

      $nota1 = $_GET["q7_1"];
      $nota2 = $_GET["q7_2"];
      $nota3 = $_GET["q7_3"];
      $media = (($nota1+$nota2+$nota3)/3);
      echo "<p>Sua média é ".$media."</p>";

      $porce = $_GET["q8"];
      echo "<p>15% de ".$porce." é: ".($porce*0.15)."</p>";

      $valorProd = $_GET["q9"];
      $prodDesconto = ($valorProd-($valorProd*0.15));
      echo "O produto com desconto vale: ".$prodDesconto."</p>";

      $seuSal = $_GET["q10"];
      $salNom = 954;
      echo "<p>Você recebe ".($seuSal/$salNom)." salarios mínimos.</p>";

    }





    ?>


  </body>
</html>
