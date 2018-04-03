<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $num = $_POST['numero'];
    if($num%2==0){
      echo "Número Par";
    }else{
      echo "Número Ímpar";
    }
    ?>
  </body>
</html>
