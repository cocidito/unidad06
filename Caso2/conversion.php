<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Caso práctico 2</title>
  </head>
  <body>
    <?php

    //convertimos los colores RGB a hexadecimal y los guardo en una variable
    $hexadecmial = "#".dechex($_POST["rojo"]).dechex($_POST["verde"]).dechex($_POST["azul"]);

    //imprimimos por pantalla el color en hexadecimal
    echo "El color RGB rojo: ".$_POST["rojo"]." verde: ".$_POST["verde"]." azul: "
    .$_POST["azul"]." en hexadecimal es : ".$hexadecmial;
    
     ?>
  </body>
</html>
