<!DOCTYPE html>
<html lang="br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    $num = $_GET["q18"];

      if (($num % 2) == 0  && $num > 0) {
      echo "True";
    } else {
      echo "False";
    }

    ?>

  </body>
</html>
