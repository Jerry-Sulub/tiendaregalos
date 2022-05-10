
<div class="head">
  <div class="ancho">
    <div class="logo">
      <a href="admin/login.php"><img src="assets/images/logo_anadru.png" alt=""></a>
    </div>
    <div class="busqueda">
      <form action="" id="busqueda" method="GET">
        <input type="text" name="buscador" placeholder="Estoy buscando...">
        <input type="submit" name="enviar" value="Buscar">
      </form>

     <?php

      /* if(isset($_GET['enviar'])){
        $busqueda = $_GET['buscador'];

        $consulta = $con->query("SELECT * FROM productos WHERE nombre LIKE '%$busqueda'");

        while($row = $consulta->fetch_array()){
          echo $row['nombre']."<br>";
        }
      } */

      ?> 
    </div>
  </div>
</div>