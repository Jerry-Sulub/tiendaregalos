<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANADRU</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <?php
    include "head.php";
    ?>
    <br>
    


    <div class="ancho">
        <?php
        foreach ($data["productos"] as $dato) {
        ?>
            <div class="vistaProducto">
                <div class="imgProducto">
                    <img src="
                <?php
                echo $dato["img"];
                ?>
                " alt="foto producto">
                </div>
                <div class="infoProducto">
                    <p class="nombre">
                        <?php
                        echo $dato["nombre"];
                        ?>
                    </p>
                    <p class="precio">$
                        <?php
                        echo $dato["precio"];
                        ?>
                    </p>
                    <a href="index.php?c=home&a=delete">Ver producto</a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <!-- Boton agregar -->
    <a class="btn_agregar" href="index.php?c=home&a=nuevo">Agregar</a>
    <br>
</body>

    <?php
        include "foot.php";
    ?>
    </body>
</html>