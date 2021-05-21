<?php include('../templates/header.html');   ?>

<body>

  <?php
  require("../config/conexion.php"); #Llama a conexión, crea el objeto PDO y obtiene la variable $db

  $var = $_POST["comuna_elegida"];
  $query = "SELECT vud.patente, vud.estado, vud.categoria, vud.tipo, vud.id_unidad FROM Vehiculos natural join Unidades natural join Direcciones AS vud WHERE comuna LIKE comuna_elegida='$var';";
  $result = $db -> prepare($query);
  $result -> execute();
  $vehiculos = $result -> fetchAll(); #Obtiene todos los resultados de la consulta en forma de un arreglo
  ?>

  <table>
    <tr>
      <th>Patente</th>
      <th>Estado</th>
      <th>Categoria</th>
      <th>Tipo</th>
      <th>ID Unidad</th>
    </tr>
  <?php
  foreach ($vehiculos as $p) {
    echo "<tr> <td>$p[0]</td> <td>$p[1]</td> <td>$p[2]</td> <td>$p[3]</td> <td>$p[4]</td></tr>";
  }
  ?>
  </table>

<?php include('../templates/footer.html'); ?>
