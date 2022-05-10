<?php

session_start();
if (!isset($_SESSION['auth'])) {
    header('location: index.php?c=secure');
}
include "template/header.php";
?>
<br><br>
<div class="ancho">
    <div class="agregar">
        <form action="index.php?c=home&a=guardar" class="text-center" enctype="multipart/form-data" method="post" name="producto">

            <div class="form-group">
                <br>
                <label for="name">Nombre</label>
                <input type="text" class="text-center" id="name" name="nombre">
                <br><br>
                <label for="comment">Descripción del producto</label id="com">
                <br>
                <textarea name="descripcion" id="comment" cols="60" rows="10" resizable="false"></textarea>
                <br><br>
                <label for="piezas" id="ape">Piezas</label>
                <input type="text" class="text-center" name="piezas" id="piezas">
                <br><br>
                <label for="precio" id="ape">Precio</label>
                <input type="text" class="text-center" name="precio" id="precio">
                <br><br>
                <label for="tipo" id="ape">Tipo</label>
                <input type="text" class="text-center" name="tipo" id="tipo">
            </div><br>
            <div class="form-group">
                <label for="im" id="im">Imagen</label>
                <input type="file" name="imagen" id="im">
            </div>
            <a id="btn" style="background-color: red; padding: 10px; margin-top: 20px; display: block; width: 50px; border-radius: 10px; color: white;">
                Enviar
            </a>
        </form>
    </div>
</div>
<script>
    let a = document.getElementById('btn');

    a.addEventListener('click', event => {
        document.producto.submit();
    });
</script>
</body>

</html>