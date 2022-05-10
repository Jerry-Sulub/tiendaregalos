<?php
session_start();
if (!isset($_SESSION['auth'])) {
    header('location: index.php?c=secure');
}
include "template/header.php";
?>
<br>
<br>
<div class="ancho">
    <div class="agregar">
        <form action="index.php?c=admin&a=actualizar" class="text-center" enctype="multipart/form-data" method="post" name="producto" autocomplete="off">

            <input type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?> " />

            <div class="form-group">
            <br>
                <label for="name">Nombre</label>
                <input type="text" class="text-center" id="name" name="nombre" value="<?php echo $data["productos"]["nombre"] ?>">
                <br><br>
                <label for="comment">Descripción del producto</label id="com">
                <br>
                <textarea name="descripcion" id="comment" cols="60" rows="10" resizable="false" value="<?php echo $data["productos"]["descripcion"] ?>"></textarea>
                <br><br>
                <label for="piezas" id="ape">Piezas</label>
                <input type="text" class="text-center" name="piezas" id="piezas" value="<?php echo $data["productos"]["piezas"] ?>">
                <br><br>
                <label for="precio" id="ape">Precio</label>
                <input type="text" class="text-center" name="precio" id="precio" value="<?php echo $data["productos"]["precio"] ?>">
                <br><br>
                <label for="tipo" id="ape">Tipo</label>
                <input type="text" class="text-center" name="tipo" id="tipo" value="<?php echo $data["productos"]["tipo"] ?>">
            </div>
            <div class="form-group"><br>
                <label for="im" id="im">Imagen</label>
                <input type="file" name="imagen" id="im" value="<?php echo $data["productos"]["img"] ?>">
            </div>
            <a id="btn">
                Enviar
            </a>
        </form>
    </div>
    <br>
</div>
<script>
    let a = document.getElementById('btn');

    a.addEventListener('click', event => {
        document.producto.submit();
    });
</script>
</body>

</html>