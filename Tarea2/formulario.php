<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tarea 2</title>
  </head>
  <body>
    Estos son los datos introducidos:<br>
    <?php
      echo "Calle: ".$_POST["calle"]."<br>";
      echo "Número: ".$_POST["numero"]."<br>";
      echo "Población: ".$_POST["poblacion"]."<br>";
      echo "Pais: ".$_POST["pais"]."<br>";
     ?>
  </body>
</html>
