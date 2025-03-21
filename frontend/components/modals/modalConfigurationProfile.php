
    <div class="modal fade" id="modalConfiguration">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Configura tu informacion</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form action="../backend/changeUserData.php" method="POST">
                        <div class="form-group">
                            <?php   foreach ($userData as $data) : ?>
                            <label for="input1">Tu nombre</label>
                            <input type="text" class="form-control" name="Cnombre" placeholder="<?php echo $data['nombre_completo'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="input2">Tu usuario</label>
                            <input type="text" class="form-control" name="Cusuario" placeholder="<?php echo $data['nombre_usuario'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="input3">Tu correo</label>
                            <input type="text" class="form-control" name="Ccorreo" placeholder="<?php echo $data['correo_usuario'] ?>"><br><br>
                        </div>
                        <div class="form-group">
                            <label for="input4">Cambia tu contraseña </label>
                            <button type="button" style="margin-left: 45px;" class="btn btn-primary" id="btnCpass">Cambiar contraseña</button><br><br><br>
                        </div>
                        <?php endforeach ?>
                        <button type="submit" name="btnChangeData" class="btn btn-success" style="margin-left: 120px; width: 240px;">Confirmar</button>
                    </form>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>