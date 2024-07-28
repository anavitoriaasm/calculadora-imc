<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo IMC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do seu cálculo</h1>
    </header>
    <main>
        <?php
          $p = $_GET["peso"];
          $a = $_GET["altura"];
          $imc = $p/($a*$a);
          $c = round($imc,2);
          echo "Seu IMC é de $c";
          if ($imc <18.5)
          {
          echo "Você está abaixo do peso ideal";
          }
          elseif ($imc>=18.5 &&$imc <=24.9)
          {
          echo "Parabéns, você está no peso ideal";
          }
          elseif ($imc >=25){
            echo "Cuidado, você está acima do peso ideal";
          }
        ?>
    </main>
</body>
</html>