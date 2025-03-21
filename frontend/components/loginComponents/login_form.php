<div class="simple-login-container">
    <img style="width: 60px; height: 50px; margin-left: 120px;" src="../imagenes/logoTienda.png"><br><br>
    <h2>Login</h2><br>
    <div class="row">
    <form action="../backend/login.php" method="POST">
        <div class="col-md-12 form-group">
            <input type="text" style="width: 300px;" class="form-control" name="username" placeholder="Username">
        </div>
    </div>
    <div class="row">       
        <div class="col-md-12 form-group">
            <input type="password" style="width: 300px;" placeholder="Password" name="pass" class="form-control"><br>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 form-group">
            <button class="btn btn-block btn-login" style="width: 207px; margin-left: 50px;" type="submit" name="btnLogin">Login</button><br>
        </div>
        </form>
    </div>
    <div class="row">
        <div class="col-md-12">
        </div>
        <div class="register">
        <a href="register.php" style="color: white;"><h2>no acount?</h2></a>
        </div>
    </div>
</div>