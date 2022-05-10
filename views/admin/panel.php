<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANADRU_Admin</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <?php
        include "head2.php";
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