<?php include('../templates/header.html');   ?>

<body>

  <?php
  require("../config/conexion.php"); #Llama a conexión, crea el objeto PDO y obtiene la variable $db

  $comuna1 = $_POST["comuna1_elegida"];
  $comuna2 = $_POST["comuna2_elegida"];
  $query = "SELECT nombre, rut, count(*) FROM Coberturas natural join Administrativos AS ca WHERE calificacion = 'administracion' AND comuna_cobertura IN (LIKE LOWER ('%$comuna1%'), LIKE LOWER ('%$comuna2%')) GROUP BY nombre, rut HAVING count(*) > 1;";
  $result = $db -> prepare($query);
  $result -> execute();
  $jefes = $result -> fetchAll(); #Obtiene todos los resultados de la consulta en forma de un arreglo
  ?>

  <table>
    <tr>
      <th>Nombre Jefe</th>
      <th>Rut Jefe</th>
    </tr>
  <?php
  foreach ($jefes as $p) {
    echo "<tr> <td>$p[0]</td> <td>$p[1]</td></tr>";
  }
  ?>
  </table>

<?php include('../templates/footer.html'); ?>
