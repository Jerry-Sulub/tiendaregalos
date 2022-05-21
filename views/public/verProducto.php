<?php
include 'head.php'
?>
<div class="ancho">
  <div class="productover">
            <div class="vistaProducto2">
                <div class="imgProducto2">
                    <img src="
                <?php
                echo $data["img"];
                ?>
                " alt="foto producto2">
                </div>
                <div class="infoProducto2">
                    <p class="nombre">
                        <?php
                        echo "<span class='des'>Producto: </span>".$data["nombre"];
                        ?>
                    </p>
                    <p class="descripción:">
                        <?php
                        echo "<span class='des'>Descripción: </span>".$data["descripcion"];
                        ?>
                    </p>
                   <p class="precio" id="price" value="<?php
                        echo $data["precio"];
                        ?>">
                        <?php
                        echo "<span class='des'>Precio: $</span>".$data["precio"];
                        ?>
                    </p>
                    <p class="piezas_dis">
                        <?php
                        echo "<span class='des'>Piezas disponibles: </span>".$data["piezas"];
                        ?>
                    </p>
                    <div class="paga">
                    <div id='paypal-button-container'></div>
                    </div>
                    
                </div>
            </div>
  </div>
</div>
<script src="assets/js/paypal.js"></script>
</body>
</html>
