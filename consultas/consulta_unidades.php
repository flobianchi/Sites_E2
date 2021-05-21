<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

 	$query = "SELECT DISTINCT ud.nombre_direccion AS direccion, ud.comuna AS comuna FROM Unidades NATURAL JOIN Direcciones AS ud ORDER BY comuna, direccion;";
	$result = $db -> prepare($query);
	$result -> execute();
	$unidades = $result -> fetchAll();

  ?>

	<table>
    <tr>
      <th>Direccion</th>
      <th>Comuna</th>
    </tr>
  <?php
	foreach ($unidades as $unidad) {
  		echo "<tr><td>$unidad[1]</td> <td>$unidad[2]</td> </tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
