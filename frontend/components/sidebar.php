<div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <ul class="list-unstyled components">
                    <p><b>Categories</b></p>
                    <li class="active">
                        <a href="home_products.php"><span class="fa fa-home mr-3"></span>Home</a>                        
                    </li>
                    <li>
                        <a href="garden_products.php" style="color: white;"><span class="fa fa-envira mr-3"></span>Garden</a>
                    </li>
                    <li>   
                        <a href="electronic_products.php" style="color: white;"><span class="fa fa-microchip mr-3"></span>Electronic</a>
                    </li>
                    <li>
                        <a href="pets_products.php" style="color: white;"><span class="fa fa-paw mr-3"></span>Pets</a>
                    </li>
                    <li>
                        <a href="clothes_products.php" style="color: white;"><span class="fa fa-shopping-bag mr-3"></span>Clothes</a>
                    </li>
                    <li>
                        <a href="toys_products.php" style="color: white;"><span class="fa fa-child mr-3"></span>Toys</a>
                    </li>
                    <li>
                        <a href="school_products.php" style="color: white;"><span class="fa fa-book mr-3"></span>School</a>
                    </li>
                    <li>
                        <a href="others_products.php" style="color: white;">Others</a>
                    </li>
                    
                   
                <ul class="list-unstyled CTAs">
                <?php if(isset($_SESSION['id_usuario'])){ ?>
                    <form action="../backend/logout.php" method="POST">
                    <button class="btn btn-warning" name="btnLogout" type="submit" style="width: 243px;">Logout</button>
                    </form>
                <?php }else{ ?>
                    <form action="login.php">
                    <button class="btn btn-warning" name="btnLogin" type="submit" style="width: 243px;">Login</button>
                    </form>                    
                <?php }?>
                </ul>
            </nav>