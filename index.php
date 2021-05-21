<?php include('templates/header.html');   ?>

<body>
  <h1 align="center">Entrega 2 by Flo y Viki </h1>
  <h2 align="center">Consultas Empresa Despachos </h2>
  <p style="text-align:center;">Aquí podrás encontrar información sobre las unidades de la empresa de despachos más cool.</p>

  <br>

  <!-- Consulta 1 -->
  <h3 align="center"> Muestre las direcciones de todas las unidades de la empresa de despachos.</h3>

  <form align="center" action="consultas/consulta_unidades.php" method="post">
    <input type="submit" value="Buscar">
  </form>
  
  <br>
  <br>
  <br>

  <!-- Consulta 2 -->
  
  <h3 align="center"> Ingrese una comuna. Muestre todos los vehiculos de las unidades ubicadas enesa comuna.</h3>

  <form align="center" action="consultas/consulta_vehiculos.php" method="post">
    Comuna:
    <input type="text" name="comuna_elegida">
    <br/>
    <input type="submit" value="Buscar">
  </form>
  
  <br>
  <br>
  <br>
<!--
  <h3 align="center"> ¿Quieres buscar un Pokemón por su ID?</h3>

  <form align="center" action="consultas/consulta_stats.php" method="post">
    Id:
    <input type="text" name="id_elegido">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  
  <br>
  <br>
  <br>

  <h3 align="center"> ¿Quieres conocer los Pokemones más altos que: ?</h3>

  <form align="center" action="consultas/consulta_altura.php" method="post">
    Altura Mínima:
    <input type="text" name="altura">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>

  <h3 align="center">¿Quieres buscar todos los pokemones por tipo?</h3>
    -->


  <br>
  <br>
  <br>
  <br>
</body>
</html>
