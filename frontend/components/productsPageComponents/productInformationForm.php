<?php
  $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : '';
  $precio = isset($_GET['precio']) ? $_GET['precio'] : '';
  $foto = isset($_GET['foto']) ? $_GET['foto'] : '';
  $descripcion = isset($_GET['descripcion']) ? $_GET['descripcion'] : '';
  $folio = isset($_GET['id_producto']) ? $_GET['id_producto'] : '';
?>
<div class="container mt-4 cardProduct">
  <div class="card">
    <div class="row no-gutters">
    <div class="col-md-4">
    <img class="imageProduct" src="<?php echo $foto; ?>" class="card-img" alt="Product Image">
    
</div>
      <div class="col-md-8">
        <div class="card-body d-flex flex-column justify-content-center">
          <h4 class="card-title titleProduct"><?php echo $nombre; ?></h4>
          <h4 class="card-title priceProduct">$<?php echo $precio; ?></h4>
          <div class="containerText">
          <p class="card-text descriptionProduct"><?php echo $descripcion ?></p>
          <?php if(isset($_SESSION['id_usuario'])){ ?> 
          <input type="hidden" name="userId" value="<?php echo $_SESSION['id_usuario']; ?>">
          <?php }?>
          <input type="hidden" name="productId" value="<?php echo $folio; ?>">
          
          
          </div>
        </div>
      </div>
    </div>
  </div>
</div>