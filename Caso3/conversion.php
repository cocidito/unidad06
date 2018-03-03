<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Caso práctico 3</title>
  </head>
  <body>
    <?php
    //comprobamos que el formulario no este vacio
    if (empty($_POST["hexadecimal"])) {
      //mostramos error si no se ha introducido nada
      echo "No ha introducido nada en el formulario";
    //comprobamos que el primer caracter introducido sea: #
    }elseif (substr($_POST["hexadecimal"], 0, 1) != "#") {
      //mostramos error si no se ha introducido en primer lugar #
      echo "No ha introducido #";
    //comprobamos que en total se han introducido 7 caracteres
    }elseif (strlen($_POST["hexadecimal"]) != 7) {
      //mostramos error si no se han introducido 7 caracteres
      echo "No ha introducido correctamente un número hexadecimal";
    }else{
      //separamos los colores y los guardamos en variables
      $rojo = substr($_POST["hexadecimal"], 1, 2);
      $verde = substr($_POST["hexadecimal"], 3, 2);
      $azul = substr($_POST["hexadecimal"], 5, 2);
      //imprimimos por pantalla los colores en RGB
      echo "El color hexadecimal ".$_POST["hexadecimal"]." en RGB es:<br>";
      echo "Rojo: ".hexdec($rojo)."<br>";
      echo "Verde: ".hexdec($verde)."<br>";
      echo "Azul: ".hexdec($azul)."<br>";
    }
     ?>
  </body>
</html>
