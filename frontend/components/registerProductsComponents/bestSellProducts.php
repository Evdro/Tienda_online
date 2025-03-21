
<div class="card tableBestSell bg-transparent">
    <h3 style="margin-left: 150px; margin-top: 10px;">Best Sellings</h3>
    <table>
        <tbody>
            <?php 
                $chunks = array_chunk($bestSells, 3); 
                foreach ($chunks as $row) : ?>
                    <tr>
                        <?php foreach ($row as $bestSell) : ?>
                            <td>
                                <a href="#">
                                    <div class="containerProducts">
                                        <div class="imageProduct">
                                            <img src="../imagenes/Productos/<?php echo $bestSell['tipo'] . '/' . $bestSell['folio_foto_producto']; ?>" style="width: 50px; height: 50px;"><br><br>
                                        </div>
                                        <div class="nameProduct">
                                            <h6><?php echo $bestSell['nombre']; ?></h6>
                                        </div>
                                        <div class="priceProduct">
                                            <h6 style="width: 100px;">$ <?php echo $bestSell['precio']; ?></h6>
                                        </div>
                                    </div>
                                </a>
                            </td>
                        <?php endforeach; ?>
                    </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>