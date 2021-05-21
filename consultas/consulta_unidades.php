<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

 	$query = "SELECT DISTINCT nombre_direccion, comuna FROM Unidades NATURAL JOIN Direcciones ORDER BY comuna, direccion;";
	$result = $db -> prepare($query);
	$result -> execute();
	$unidades = $result -> fetchAll();

  ?>

	<table>
    <tr>
	  <th>ID Unidad</th>
      <th>Direccion</th>
      <th>Comuna</th>
    </tr>
  <?php
	foreach ($unidades as $unidad) {
  		echo "<tr><td>$unidad[0]</td><td>$unidad[1]</td> </tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
