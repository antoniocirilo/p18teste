<!DOCTYPE html>
<html lang="br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    echo "<p>".$_GET["nome1"]."</p>";
    echo $_GET["nome2"];

    //echo $_GET["link"];

    if(!(isset($_POST["nome"]) && isset($_POST["email"]))) {
      echo "<p>Alguma informação está em faltando.</p>";
    } else{
      $nome = $_POST["nome"];
      $email = $_POST["email"];
      echo "<p>Nome: ".$nome."</p>";
      echo "<p>Email: ".$email."<p>";
    }


    ?>

  </body>
</html>
