<!DOCTYPE html>
<html lang="br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    $numA = $_GET["q6_R_1"];
    $numB = $_GET["q6_R_2"];

    if ($numA < $numB) {
      for ($i=($numA+1); $i < $numB ; $i++) {
        echo " $i </br> ";
      }
    } else if ($numA > $numB) {
      for ($i=($numA-1); $i > $numB; $i--) {
        echo " $i </br>";
      }
    }

     ?>

  </body>
</html>
