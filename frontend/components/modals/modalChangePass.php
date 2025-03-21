<div class="modal fade" id="modalChangePass">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Cambia tu contraseña</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form action="../backend/changeUserData.php" method="POST">
                    <div class="form-group">
                        <label for="currentPassword">Tu contraseña</label>
                        <input type="password" class="form-control" name="pass" placeholder="ingresa tu contraseña">
                    </div>
                    <div class="form-group">
                        <label for="newPassword">Nueva contraseña</label>
                        <input type="password" class="form-control" name="newPass" placeholder="ingresa la nueva contraseña">
                    </div>
                
            </div>
                    
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button class="btn btn-primary submit" name="btnCambiarPass" id="btnCambiarDatos" style="margin-right: 190px;">Confirmar</button>
            </div>
            </form>

        </div>
    </div>
</div>