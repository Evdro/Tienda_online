<div>   
    <?php 
        foreach($carrito as $productos) :            
    ?>
        
        <div class="containerInfo">
            <img class="imgCar" style="width: 100px; height: 100px; margin-right: 130px;" src="<?php echo "../imagenes/Productos/".$productos['tipo']."/".$productos['folio_foto_producto'] ?>">
            
            <label style="margin-left: 100px; margin-top: -30px;" class="name"><?php echo $productos['nombre'] ?></label><br>
            <label style="margin-left: 150px ;"><?php echo $productos['descripcion_producto'] ?></label>
            <input type="hidden" name='idCarrito' value="<?php echo $productos['id_carrito'] ?>">
        </div>
             <div class="btnContainer">
                 <button type="submit" class="btn btn-danger btnElim" name="btnEliminate">Eliminate</button>
             </div>
        
        <br>
        <br>
        <br>
    <?php endforeach;  ?>
</div>