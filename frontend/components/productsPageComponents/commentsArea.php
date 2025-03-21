<?php
?>
<div class="container mt-4">
  <div class="row">
    <div class="col-md-6">
      <div class="card writeComentary" style="border: none;">
        <br><label class="labelPublic"><b>Leave your comment</b></label>
        <form action="../backend/registerComentary.php" method="POST">
          <div class="card-body cardComentary">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
              </div>
              <textarea class="form-control comentaryField" style="height: 180px; margin-top: -10px;" name="comentary"></textarea>
            </div>
            <form action="../backend/showComentarys.php" method="POST">
              <button class="btn btn-outline-secondary" type="submit" name="btnComent" style="margin-left: 500px;">Public comentary</button>
              <?php if(isset($_SESSION['id_usuario'])){?>
              <input type="hidden" name="userId" value="<?php echo $_SESSION['id_usuario']; ?>">
              <?php }?>
              <input type="hidden" name="productsId" value="<?php echo $folio; ?>">
            </form>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- mostrar comentarios -->
  <?php foreach ($comentarios as $comentario) : ?>
    <div class="row mt-4">
      <div class="col-md-6">
        <div class="card showComentarys" style="border: none;">
          <div class="card-body">
            <label style="margin-left: 80px;"><?php echo $comentario['id_comprador'] ?></label>
            <label style="margin-left: 150px;"><?php echo $comentario['fecha_compra'] ?></label>
            <div class="comentaryField">
              <label for=""><?php echo $comentario['comentario'] ?></label>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach ?>
</div>