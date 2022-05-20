<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANADRU</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="https://www.paypal.com/sdk/js?client-id=AdcLtHAeTss9pwqSgyJ2aarbzED8fdxfWiwAd3gYA6aUblKF1mc3NujbK2WNLvsemFUFtznRLYAJ0I-4&currency=MXN"></script>
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
                    <!-- <a href="#">Ver producto</a> -->
                    <?php
                    echo"<div id='paypal-button-container'></div>";
                    ?>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <script>
    paypal.Buttons({
      style:{
        shape:'pill'
      },
      createOrder: function(data, actions){
        return actions.order.create({
          purchase_units:[{
            amount:{
              value:"100"
            }
          }]
        });
      },
      onApprove: function(data, actions){
        actions.order.capture().then(function (detalles){
          console.log(detalles);
          alert("Pago realizado con éxito")
        });
      },
      onCancel: function(data){
        alert("Pago Cancelado");
        console.log(data);
      }
    }).render('#paypal-button-container');
  </script>
    </body>
</html>