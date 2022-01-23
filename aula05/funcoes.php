<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>funcoes aritmeticas em php</title>
  <link rel="stylesheet" href="/projects/aulaPHP/_css/estilo.css">
  <style>
    h2 {
      font: 20px Arial;
      color: #171559;
    }
  </style>
</head>
<body>
  <div>
    <?php 
      $v1 = $_GET["x"];
      $v2 = $_GET["y"];
      echo "<h2>Valores recebidos: $v1 e $v2</h2>";
      echo "O valor aboluto de $v2 e " . abs($v2);
      echo "<br>O valor de $v1<sup>$v2</sup> e " . pow($v1, $v2);
      echo "<br>A raiz de $v1 e " . sqrt($v1);
      echo "<br>O valor de $v1 e " . round($v1); // cell, floor
      echo "<br>A parte inteira de $v2 e " . intval($v2);
      echo "<br>O valor de 8 em moeda e R$" . number_format($v2, 2, ",", ".");
    ?>
  </div>
</body>
</html>