<?php
// comprobamos que los campos no estan vacios
$nombre = (empty($_POST['nombre'])) ? 'Hay campos vacios' : $_POST['nombre'];
$texto = (empty($_POST['texto'])) ? 'Hay campos vacios' : $_POST['texto'];
$palabras = (empty($_POST['palabras'])) ? 'Hay campos vacios' : $_POST['palabras'];

if ($nombre === 'Hay campos vacios' || $texto === 'Hay campos vacios' || $palabras === 'Hay campos vacios'){
  echo "Hay campos vacios";
}else{
  // Devuelve un array de string, siendo cada uno un substring
  $palabrasDestacadas = explode(" ", $palabras);
  $textoLargo = explode(" ", $texto);
  // hacemos un echo para que saque tambien el nombre
  echo "<h3>Hola $nombre</h3>";
  // bucle que recorre el array que hemos creado
  foreach ($textoLargo as $value) {
    $encontrado = false;

  foreach ($palabrasDestacadas as $palabra) {
      if ($palabra === $value) {
          $encontrado = true;
      }
  }
      if ($encontrado) {
        echo "<b>$value</b> ";
      } else {
        echo $value." ";
    }
  }
}
?>
