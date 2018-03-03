<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Caso práctico 4</title>
  </head>
  <body>
    <?php
      //calcular la nota media
      $notaMedia = ($_POST["prog"]+$_POST["ed"]+$_POST["llmm"]+$_POST["bbdd"])/4;
      //buscar nota mas alta
      $notaAlta = max($_POST["prog"],$_POST["ed"],$_POST["llmm"],$_POST["bbdd"]);
      //buscar nota mas baja
      $notaBaja = min($_POST["prog"],$_POST["ed"],$_POST["llmm"],$_POST["bbdd"]);
      //motrar por pantalla una cabecera con nombre, apellidos, curso y ciclo
      echo "<h2>".$_POST["nombre"]." ".$_POST["apellidos"]." ".$_POST["curso"]."/"
      .$_POST["ciclo"]."</h2><br>";
      //mostrar por pantalla la nota media, alta y baja.
      echo "Nota media de las asignaturas: ".$notaMedia."<br>";
      echo "Nota más baja: ".$notaBaja."<br>";
      echo "Nota más alta: ".$notaAlta."<br>";
     ?>
  </body>
</html>
