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
<div class="head">
    <div class="ancho">
        <div class="busqueda">
            <form action="" id="busqueda" method="POST">
                <input type="text" name="buscador" placeholder="Estoy buscando...">
                <input type="submit" value="Buscar">
            </form>
        </div>
    </div>
</div>

<div>
			<div>
				<table border="1" width="80%" class="table">
					<thead>
						<tr class="table-primary">
							<th>ID</th>
							<th>Nombre</th>
							<th>Descripción</th>
							<th>Piezas</th>
							<th>Precio</th>
							<th>Imagen</th>
							<th>Tipo</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($data["regalos"] as $dato) {
							echo "<tr>";
							echo "<td>".$dato["ID"]."</td>";
							echo "<td>".$dato["nombre"]."</td>";
							echo "<td>".$dato["descripcion"]."</td>";
							echo "<td>".$dato["piezas"]."</td>";
							echo "<td>".$dato["precio"]."</td>";
                            echo "<td><img src=".$dato["img"]." ></td>";
							echo "<td>".$dato["tipo"]."</td>";

							echo "<td><a href='index.php?c=home&a=editar&id=".$dato["ID"]."' class='btn btn-danger'>Editar</a></td>";
							
							echo "<td><a href='index.php?c=home&a=eliminar&id=".$dato["ID"]."' class='btn btn-danger'>Eliminar</a></td>";
							echo "</tr>";
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
</body>
</html>