<?php include('../templates/header.html');   ?>

<body>

  <?php
  require("../config/conexion.php"); #Llama a conexión, crea el objeto PDO y obtiene la variable $db

  $comuna = $_POST["comuna_elegida"];
  $ano = $_POST["select_ano"];
  $query = "SELECT * FROM Vehiculos NATURAL JOIN Despachos NATURAL JOIN Direcciones AS vdd
   WHERE id_direccion_destino = id_direccion and fecha LIKE ('%$ano%')
   AND comuna LIKE LOWER ('%$comuna%')
   ORDER BY estado, categoria, tipo, patente;";
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
    </tr>
  <?php
  foreach ($vehiculos as $p) {
    echo "<tr> <td>$p[2]</td> <td>$p[3]</td> <td>$p[4]</td> <td>$p[5]</td></tr>";
  }
  ?>
  </table>

<?php include('../templates/footer.html'); ?>
