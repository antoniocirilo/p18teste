<!DOCTYPE html>
<html lang="br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    $num = $_GET["q16"];

    if (($num % 2) == 0 && $num < 10) {
      echo "True";
    } else {
      echo "False";
    }

    ?>

  </body>
</html>
