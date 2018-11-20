<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FizzBuzzOptativa</title>
  </head>
  <h3>Actividad Optativa de FizzBuzz</h3>
  <body>
    <?php
    $numero=0;
    for ($numero; $numero <= 100; $numero++) {
      echo "<br>";
      if ($numero % 3 == 0) {
        echo "FIZZ";
      } if ($numero % 5 == 0) {
          echo "BUZZ";
        } if ($numero % 5 ==! 0 && $numero % 3 ==! 0) {
            echo "$numero";
        }
      }
     ?>
  </body>
</html>
