<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Serie 9</title>
  </head>
  <body>
    <?php
      //Exc 01:
      echo date("d/m/Y");
      echo "<hr>";
      //Exc 02:
      echo date("d-m-Y");
      echo "<hr>";
      //Exc 03:

      echo date("l d F Y ");
      echo "<hr>";

      //Exc 04:

      $fecha = new DateTime();
      echo $fecha->format('U = Y-m-d H:i:s') . "\n<br>";

      $fecha -> setTimestamp(1480250962);
      echo $fecha->format('U = Y-m-d H:i:s') . "\n";

      echo "<hr>";

      //Exc 05:



     ?>
  </body>
</html>
