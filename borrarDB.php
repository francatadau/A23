<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Borrar entrada.</title>
  </head>
  <body>
    <?php
      include 'dbnba.php';
      $equipo=new dbnba();
      $del=$equipo->BorrarEquipo($_GET["nombre"]);
      if ($del==true) {
        echo "Se ha borrado con éxito";
      }else {
        echo "<a href='listaequipos.php>No se ha podido borrar.</a>'";
      }
     ?>
  </body>
</html>
