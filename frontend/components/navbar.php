<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a href="principal_page.php"><img style="width: 50px; height: 40px;" src="../imagenes/logoTienda.png"></a>
  <a class="navbar-brand" href="principal_page.php">Shoping shop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="principal_page.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Best selling</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="account_page.php">My acount</a>
      </li>
      <?php 
        if(isset($_SESSION['id_usuario'])){
      ?>
      <a href="buy_car.php">
      <img src="../imagenes/logoCesta.png" style="width: 35px; height: 35px; margin-left: 700px;">
      </a>
      <?php }?>
    </ul>   
    
    
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</nav>