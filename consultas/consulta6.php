<?php include('../templates/header.html');   ?>

<body>

  <?php
  require("../config/conexion.php"); #Llama a conexión, crea el objeto PDO y obtiene la variable $db

  $tipo = $_POST["tipo_vehiculo"];
  $query = "SELECT DISTINCT * FROM Vehiculos, Despachos, Direcciones AS vdd WHERE id_direccion_destino = id_direccion and fecha LIKE ('%$tipo%');";
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
