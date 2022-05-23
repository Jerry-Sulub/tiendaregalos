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
<div class="head">
  <div class="ancho">
    <div class="logo">
      <a href="index.php?c=secure"><img src="assets/images/logo_anadru.png" alt=""></a>
    </div>
      <p><?= 'Clima de ' . $resClim->name ?></p>
      <p><?= 'Temp. Min: ' . $resClim->main->temp_min . '°C,  Temp. Max: ' . $resClim->main->temp_max . '°C' ?></p>
      <p><?= 'Humedad: ' . $resClim->main->humidity . '%,  Viento: ' . $resClim->wind->speed; ?> km/h</p>
  </div>
</div>