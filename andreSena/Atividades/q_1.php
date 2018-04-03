<!DOCTYPE html>
<html lang="br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php


    $nome = $_GET["q_1"];
    $tamanho = strlen($nome);

    for ($i=$tamanho; $i > 0 ; $i--) {
      echo (substr("$nome", ($i-1), 1));
    }


     ?>

  </body>
</html>
