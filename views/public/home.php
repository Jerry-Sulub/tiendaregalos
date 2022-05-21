<?php
    include "head.php";
    ?>
    <br>

    <div class="ancho">
        <?php
        foreach ($data["productos"] as $dato) {
          if($dato["piezas"]>0){

          
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
                    <a href="index.php?c=Home&a=showProduct&id=<?= $dato["ID"] ?>">Ver producto</a>
                    
                </div>
            </div>
        <?php
        }
        }
        ?>
    </div>
    </body>
</html>