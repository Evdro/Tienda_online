<div class="simple-login-container">
    <h2>Register</h2><br>
    <div class="row">
        <form action="../backend/registro.php" method="POST">
            <div class="col-md-12 form-group">
                <input type="text" style="width: 300px;" class="form-control" name="nombre" placeholder="Name">
            </div>
    </div>
    <div class="row">
        <div class="col-md-12 form-group">
            <select name="edad" class="form-control" style="width: 80px;">
                <option value="">Age</option>
                <?php
                for ($i = 18; $i < 91; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
                ?>
            </select>
        </div>
    </div>
    <div class="row">
    <div class="col-md-12 form-group">
        <input type="text" style="width: 300px;" class="form-control" name="usuario" placeholder="Username">
    </div>
    </div>
    <div class="row">
    <div class="col-md-12 form-group">
        <input type="text" style="width: 300px;" class="form-control" name="correo" placeholder="Mail">
    </div>
    </div>
    <div class="row">
    <div class="col-md-12 form-group">
                <input type="text" style="width: 300px;" class="form-control" name="pass" placeholder="Password"><br>
            </div>
            </div>
    <div class="row">
        <div class="col-md-12 form-group">
            <button class="btn btn-block btn-login" style="width: 207px; margin-left: 50px;" type="submit" name="btnRegistro">Register</button><br>
        </div>
        </form>
    </div>
    </div>