<!DOCTYPE html>
<html lang="br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    $num = $_GET["q15"];
    if ($num >= 5 && $num < 50) {
      echo "True";
    } else {
      echo "False";
    }

     ?>

  </body>
</html>
