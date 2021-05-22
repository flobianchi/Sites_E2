<?php include('../templates/header.html');   ?>

<body>

  <?php
  require("../config/conexion.php"); #Llama a conexión, crea el objeto PDO y obtiene la variable $db

  $tipo = $_POST["tipo_vehiculo"];
  $query = "SELECT id_unidad FROM Unidades NATURAL JOIN Vehiculos as uv
   GROUP BY id_unidad HAVING COUNT(*) = (
     SELECT MAX(cantidad) FROM (
       SELECT id_unidad, COUNT(*) AS cantidad FROM Unidades NATURAL JOIN Vehiculos as uv 
       GROUP BY id_unidad) AS t );";
  $result = $db -> prepare($query);
  $result -> execute();
  $Unidades = $result -> fetchAll(); #Obtiene todos los resultados de la consulta en forma de un arreglo
  ?>

  <table>
    <tr>
      <th>Patente</th>
      <th>Estado</th>
      <th>Categoria</th>
      <th>Tipo</th>
    </tr>
  <?php
  foreach ($Unidades as $p) {
    echo "<tr> <td>$p[2]</td> <td>$p[3]</td> <td>$p[4]</td> <td>$p[5]</td></tr>";
  }
  ?>
  </table>

<?php include('../templates/footer.html'); ?>
