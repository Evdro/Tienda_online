<table border="1">
    <?php $contador = 0; ?>
    <?php foreach ($productos as $producto) : ?>
        <?php if ($contador % 4 == 0) : ?>
            <tr>
            <?php endif; ?>
            <td><?php
            $url = 'product_buy.php?' .
                'nombre=' . urlencode($producto['nombre']) . '&' .
                'precio=' . urlencode($producto['precio']) . '&' .
                'foto=' . urlencode('../imagenes/Productos/'. $producto['tipo'] . '/' . $producto['folio_foto_producto']) . '&' . 
                'descripcion=' . urlencode($producto['descripcion_producto']) . '&' . 
                'idProducto=' . urlencode($producto['id_producto']);
            ?>
            <a href="<?php echo $url; ?>">
                    <div class="containerProducts">
                        <div class="imageProduct">
                            <img src="../imagenes/Productos/<?php echo $producto['tipo'] . '/' . $producto['folio_foto_producto']; ?>"><br><br>
                        </div>
                        <div class="nameProduct">
                            <h6><?php echo $producto['nombre']; ?></h6>
                        </div>
                        <div class="priceProduct">
                            <h6>$ <?php echo $producto['precio']; ?></h6>
                        </div>
                    </div>
                </a>
            </td>
            <?php $contador++; ?>
            <?php if ($contador % 4 == 0) : ?>
            </tr>
        <?php endif; ?>
    <?php endforeach; ?>
    <?php if ($contador % 4 != 0) : ?>
        </tr>
    <?php endif; ?>
</table>