<div class="card tablesellData bg-transparent">
    <div class="table-responsive">
        <table class="table">
            <tbody>
                <tr>
                    <td colspan="3" class="text-center">Selling</td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div id="carouselsell" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <?php foreach ($productos as $key => $producto) : ?>
                                    <div class="carousel-item <?php echo ($key === 0) ? 'active' : ''; ?>">
                                        <img src="../imagenes/Productos/<?php echo $producto['tipo'] . '/' . $producto['folio_foto_producto']; ?>" style="width: 120px; height: 120px;" class="d-block w-100" alt="Product Image">
                                        <div class="carousel-caption">
                                            <label class="nombreProducto"><?php echo $producto['nombre']; ?></label>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselsell" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselsell" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>