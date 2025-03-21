
<div class="productsForm">
    <table>
        <tbody>
            <tr>
                <div class="formContainer">
                    <td colspan="2">
                        <form action="../backend/registerProduct.php" method="POST" enctype="multipart/form-data">
                        <input type="text" class="form-control" name="productName" placeholder="Product name"><br>
                        <select class="form-control" name="supplierName" id="supplier">
                            <?php foreach ($suppliers as $supplier) : ?>
                                <option value="<?php echo $supplier['id_provedor']; ?>">
                                    <?php echo $supplier['nombre_provedor']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select><br>
                        <select class="form-control" name="typeProduct" id="typeProduct">
                            <?php
                            foreach ($products as $product) : ?>
                                <option value="<?php echo $product['nombre_tipo_producto'] ?>">
                                    <?php
                                    echo $product['nombre_tipo_producto'];
                                    ?>
                                </option>
                            <?php endforeach; ?>
                        </select><br>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control" name="amount" placeholder="Amount">
                        </div>
                        <div class="containerDescription">
                            <label style="margin-left: 70px; margin-top: 15px;">Describe your product</label>
                            <textarea class="form-control descriptionArea" name="descriptionProduct" style="width: 300px; height: 100px;"></textarea>
                        </div>
                    </td>
                </div>
                <td>
                    <div class="imageShow">
                        <img style="width: 200px; height: 200px;" src="../imagenes/imagesProfileCards/profile.png" id="showUploadedImage"><br><br><br>
                        <label for="fileInput">Seleccionar Archivo</label>
                        <input type="file" class="form-control-file" id="fileInput" name="imageProduct">
                        <input type="hidden" name="userId" value="<?php echo $_SESSION['id_usuario']; ?>">

                    </div>
</div>
</td>
</tr>
<tr>
    <td colspan="3">
        <button type="submit" class="btn btn-primary btnRegister" name="btnSellProduct" style="margin-left: 40px; margin-top: 50px;">Sell</button>
    </td>
    </form>
</tr>
</tbody>
</table>
</div>