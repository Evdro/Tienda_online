<div class="card tableproducts bg-transparent">
    <table>
        <tbody>
            <tr>
				<br>
                <td colspan="3"><center>Recommended products</center></td>
            </tr>
            <tr>
                <td colspan="3">
                    <?php foreach ($productos as $producto) : ?>
						<a href="#">
							<center>
                        <div class="producto">
                            <br><img src="../imagenes/Productos/<?php echo $producto['tipo'] . '/' . $producto['folio_foto_producto']; ?>" style="width: 120px; height: 120px;">
                            <p><?php echo $producto['nombre']; ?></p>
                            <p><?php echo $producto['precio']; ?></p>
                        </div>
						</center>
						</a>
                    <?php endforeach; ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>