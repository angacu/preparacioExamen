<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>actividad02</title>
  </head>
  <body>
    <?php
    $red = $_POST['red'];
    $green = $_POST['green'];
    $blue = $_POST['blue'];

    if (empty($red && $green && $blue)) {
      echo "Algun campo esta vacio";
    }
    elseif ($red < 1 || $red > 255) {
      echo "Falta un valor del 1 al 255 en red";
    }
    elseif ($green < 1 || $green > 255) {
      echo "Falta algun valor del 1 al 255 en green";
    }
    elseif ($blue < 1 || $blue > 255) {
      echo "Falta algun valor del 1 al 255 en blue";
    }
    else {
      echo "<strong>Esta es tu combinacion de colores: </strong>";
      echo "<br>";
      echo "<div style='background-color: rgb($red,$green,$blue)'>Color rgb</div>";
    }

    ?>
  </body>
</html>
