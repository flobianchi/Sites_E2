<?php include('templates/header.html');   ?>

<body>
  <h1 align="center">Entrega 2 by Flo y Viki </h1>
  <h2 align="center">Consultas Empresa Despachos </h2>
  <p style="text-align:center;">Aquí podrás encontrar información sobre las unidades de la empresa de despachos más cool.</p>

  <br>

  <!-- Consulta 1 -->
  <h3 align="center"> Muestre las direcciones de todas las unidades de la empresa de despachos.</h3>

  <form align="center" action="consultas/consulta1.php" method="post">
    <input type="submit" value="Buscar">
  </form>
  
  <br>
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
  <br>

<!-- Consulta 4 -->
<h3 align="center">Ingrese un tipo de vehículo y selecciones dos números. Muestre todos los despachos realizados por un vehiculo del tipo ingresado, y cuyo repartidor tiene una edad entre el rando seleccionado.</h3>

<form align="center" action="consultas/consulta4.php" method="post">
  Tipo Vehiculo:
  <input type="text" name="tipo_vehiculo">
  <br/>
  Edad 1:
  <input type="text" name="edad1">
  <br/>
  Edad 2:
  <input type="text" name="edad2">
  <br/>
  <input type="submit" value="Buscar">
</form>

<br>
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
<br>

<!-- Consulta 6 -->
<h3 align="center">Encuentre la unidad que maneja más vehiculos del tipo seleccionado.</h3>

<form align="center" action="consultas/consulta6.php" method="post">
  Tipo Vehiculo:
  <input type="text" name="tipo_vehiculo">
  <br/>
  <input type="submit" value="Buscar">
</form>

<br>
<br>
<br>

</body>
</html>
