<?php include('../templates/header.html');   ?>

<body>

  <?php
  require("../config/conexion.php"); #Llama a conexión, crea el objeto PDO y obtiene la variable $db

  $comuna = $_POST["comuna_elegida"];
  $query = "SELECT * FROM Vehiculos natural join Unidades natural join Direcciones AS vud WHERE comuna LIKE '%$comuna%'";
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
    echo "<tr> <td>$p[3]</td> <td>$p[4]</td> <td>$p[5]</td> <td>$p[6]</td> <td>$p[1]</td></tr>";
  }
  ?>
  </table>

<?php include('../templates/footer.html'); ?>
