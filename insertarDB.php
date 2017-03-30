<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insercion de nuevos equipos</title>
  </head>
  <body>
    <?php
    //Se comprueba que todos los campos no estan vacios.
    if (empty($_POST["nombre"])==false && empty($_POST["ciudad"])==false && empty($_POST["conferencia"])==false && empty($_POST["division"])==false) {
      include 'dbnba.php';
      $equipo=new dbnba();

        $resultado=$equipo->Insertarequipo($_POST["nombre"], $_POST["ciudad"], $_POST["conferencia"], $_POST["division"]);

        echo "Último registro: <br>";
        $resultado=$equipo->DevolverEquipoNombre($_POST["nombre"]);
        $fila=$resultado->fetch_assoc();
        echo "Nombre: " .$fila["Nombre"] ."<br>Ciudad: " .$fila["Ciudad"] ."<br>Conferencia: " .$fila["Conferencia"] ."<br>Division: " .$fila["Division"];

        echo "<br>";
        echo "<a href='actualizar.php?nombre=".$fila["Nombre"]."&ciudad=".$fila["Ciudad"]."&conferencia=".$fila["Conferencia"]."&division=".$fila["Division"]."'>Actualizar registro.</a>";

        echo "<br>";
        echo "<a href='listaequipos.php?nombre=".$fila["Nombre"]."'>Borrar registro.</a>";

        }else {
        echo "<a href='index.php'> Debes rellenar todos los campos </a>";
        }
     ?>
  </body>
</html>
