<?php include('../templates/header.html');   ?>

<body>

  <?php
  require("../config/conexion.php"); #Llama a conexión, crea el objeto PDO y obtiene la variable $db

  $tipo = $_POST["tipo_vehiculo"];
  $edad1 = $_POST["edad1"];
  $edad1 = intval($edad1);
  $edad2 = $_POST["edad2"];
  $edad2 = intval($edad2);
  $query = "SELECT * FROM Despachos NATURAL JOIN Vehiculos NATURAL JOIN Repartidores AS dvr
   WHERE id_personal_repartidor = id_personal AND tipo LIKE LOWER('%$tipo%')
   AND edad BETWEEN $edad1 AND $edad2;";
  $result = $db -> prepare($query);
  $result -> execute();
  $despachos = $result -> fetchAll(); #Obtiene todos los resultados de la consulta en forma de un arreglo
  ?>

  <table>
    <tr>
      <th>ID Despacho</th>
      <th>Fecha Despacho</th>
      <th>ID Compra</th>
      <th>Nombre Repatidor</th>
      <th>Edad Repartidor</th>
    </tr>
  <?php
  foreach ($despachos as $p) {
    echo "<tr> <td>$p[1]</td> <td>$p[5]</td> <td>$p[6]</td> <td>$p[13]</td> <td>$p[16]</td></tr>";
  }
  ?>
  </table>

<?php include('../templates/footer.html'); ?>
