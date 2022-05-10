<?php

    session_start();
    if(!isset($_SESSION['auth']))
    {
        header('location: index.php?c=secure');
    }
    include "template/header.php";
?>
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
							<th>Editar</th>
							<th>Eliminar</th>
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

							echo "<td><a href='index.php?c=admin&a=modificar&id=".$dato["ID"]."' class='btn btn-danger'>Modificar</a></td>";
							
							echo "<td><a href='index.php?c=addmin&a=eliminar&id=".$dato["ID"]."' class='btn btn-danger'>Eliminar</a></td>";
							echo "</tr>";
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
</body>
</html>