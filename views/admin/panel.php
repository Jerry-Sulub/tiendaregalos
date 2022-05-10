
    <?php
           session_start();
           if(!isset($_SESSION['auth']))
           {
               header('location: index.php?c=secure');
           }
           include "template/header.php";
    ?>
    <div class="ancho">
        <table class="tablaPanel">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Piezas</th>
                <th>Precio</th>
                <th>Tipo</th>
                <th>Imagen</th>
            </tr>
            <?php
                foreach($data["productos"] as $dato){
                echo "<tr>";
                echo "<td>".$dato["ID"]."</td>";
                echo "<td>".$dato["nombre"]."</td>";
                echo "<td>".$dato["descripcion"]."</td>";
                echo "<td>".$dato["piezas"]."</td>";
                echo "<td>".$dato["precio"]."</td>";
                echo "<td>".$dato["tipo"]."</td>";
                echo "<td><img src='".$dato["img"]."' alt='Foto del producto'> </td>";
                echo "</tr>";     
            }
        ?>
        </table>
        
</body>
</html>