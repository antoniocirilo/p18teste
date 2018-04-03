<!DOCTYPE html>
<html lang="br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    $num = $_GET["q1_2"];

    if (($num % 2) == 0) {
      echo "Número par.";
    } else {
      echo "Número impar";
    }

    ?>

  </body>
</html>
