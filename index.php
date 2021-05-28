<?php include('templates/header.html');   ?>



<body>
  <h1 align="center">Consultas Empresa Despachos</h1>
  <h3 align="center">Entrega 2 by Flo y Viki </h3>
  <img src="https://i.imgur.com/AWGxKNp.png" alt="Flo Emoji" style="width:40px;height:40px;"> 
  <img src="https://i.imgur.com/i639Wpv.png" alt="Viki Emoji" style="width:40px;height:40px;">  

  <p style="text-align:center;">Aquí podrás encontrar información sobre las unidades de la empresa de despachos más cool.</p>

  <br>
  <img src='https://www.mpproductividad.es/wp-content/uploads/2020/04/Grafico6-Final.gif' style="width:200px;height:200px;">
  <br>

  <!-- Consulta 1 -->
  <h3 align="center"> Muestre las direcciones de todas las unidades de la empresa de despachos.</h3>
  <form align="center" action="consultas/consulta1.php" method="post">
  <div class=button>
    <input type="submit" value="Buscar">
  </div>
  </form>
  
  <br>
  <br>

  <!-- Consulta 2 -->
  <h3 align="center"> Ingrese una comuna. Muestre todos los vehiculos de las unidades ubicadas en esa comuna.</h3>
  <form align="center" action="consultas/consulta2.php" method="post">
    Comuna:
    <input type="text" name="comuna_elegida">
    <br/>
    <input type="submit" value="Buscar">
  </form>
  
  <br>
  <br>

<!-- Consulta 3 -->
  <h3 align="center">Ingrese una comuna y seleccione un año. Muestre todos los vehiculos que hayan realizado un despacho en dicha comuna durante ese año.</h3>
  <form align="center" action="consultas/consulta3.php" method="post">
    Comuna:
    <input type="text" name="comuna_elegida">
    <br/>
    Año:
    <input type="text" name="select_ano">
    <br/>
    <input type="submit" value="Buscar">
  </form>
  
  <br>
  <br>

<!-- Consulta 4 -->
<h3 align="center">Ingrese un tipo de vehículo y selecciones dos números. Muestre todos los despachos realizados por un vehiculo del tipo ingresado, y cuyo repartidor tiene una edad entre el rando seleccionado.</h3>
<?php
  #Primero obtenemos todos los tipos de pokemones
  require("config/conexion.php");
  $result = $db -> prepare("SELECT DISTINCT tipo FROM Vehiculos;");
  $result -> execute();
  $dataCollected = $result -> fetchAll();
  ?>

  <form align="center" action="consultas/consulta4.php" method="post">
    Tipo Vehiculo:
    <select name="tipo_vehiculo">
      <?php
      #Para cada tipo agregamos el tag <option value=value_of_param> visible_value </option>
      foreach ($dataCollected as $d) {
        echo "<option value=$d[0]>$d[0]</option>";
      }
      ?>
    </select>
    <br/>
  Edad Mínima:
  <input type="text" name="edad1">
  <br/>
  Edad Máxima:
  <input type="text" name="edad2">
  <br/>
  <input type="submit" value="Buscar">
</form>

<br>
<br>

<!-- Consulta 5 -->
<h3 align="center">Ingrese dos comunas. Encuentre los jefes de las unidades que realizan despachos a ambas comunas.</h3>
<form align="center" action="consultas/consulta5.php" method="post">
  Comuna 1:
  <input type="text" name="comuna1_elegida">
  <br/>
  Comuna 2:
  <input type="text" name="comuna2_elegida">
  <br/>
  <input type="submit" value="Buscar">
</form>

<br>
<br>

<!-- Consulta 6 -->
<h3 align="center">Ingrese un tipo de vehiculo. Encuentre la unidad que maneja más vehiculos de ese tipo.</h3>
<?php
  #Primero obtenemos todos los tipos de pokemones
  require("config/conexion.php");
  $result = $db -> prepare("SELECT DISTINCT tipo FROM Vehiculos;");
  $result -> execute();
  $dataCollected = $result -> fetchAll();
  ?>

  <form align="center" action="consultas/consulta6.php" method="post">
    Tipo Vehiculo:
    <select name="tipo_vehiculo">
      <?php
      #Para cada tipo agregamos el tag <option value=value_of_param> visible_value </option>
      foreach ($dataCollected as $d) {
        echo "<option value=$d[0]>$d[0]</option>";
      }
      ?>
    </select>
    <br>
  <input type="submit" value="Buscar">
</form>

<br>
<br>

</body>
</html>
