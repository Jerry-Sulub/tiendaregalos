<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="index.php?c=home&a=actualizar" class="text-center" enctype="multipart/form-data" method="post"
        name="producto">
        <input type="hidden" id="id" name="id" value=" <?php echo $data["id"];?> ">

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="text-center" id="name" name="nombre">
            <br>
            <label for="comment">Descripción del producto</label id="com">
            <br>
            <textarea name="descripcion" id="comment" cols="60" rows="10" resizable="false"></textarea>
            <br>
            <label for="piezas" id="ape">Piezas</label>
            <input type="text" class="text-center" name="piezas" id="piezas">
            <br>
            <label for="precio" id="ape">Precio</label>
            <input type="text" class="text-center" name="precio" id="precio">
            <br>
            <label for="tipo" id="ape">Tipo</label>
            <input type="text" class="text-center" name="tipo" id="tipo">
        </div>        
        <div class="form-group">
            <label for="im" id="im">Imagen</label>
            <input type="file" name="imagen" id="im">
        </div>
        <a id="btn" style="background-color: red; padding: 10px; margin-top: 20px; display: block; width: 50px; border-radius: 10px; color: white;">
            Enviar
        </a>
    </form>

    <script>
        let a = document.getElementById('btn');

        a.addEventListener('click', event=>{
            document.producto.submit();
        });
    </script>
</body>

</html>