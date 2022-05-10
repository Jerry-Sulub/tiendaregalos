<?php
        include "template/header.php";
    ?>

    <div class="ancho">
    <?php
            foreach($data["productos"] as $dato){
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
                <a href="#">Ver producto</a>
            </div>
        </div>
        <?php
        }
        ?>
    </div>

    </body>
</html>