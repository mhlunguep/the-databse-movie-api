<header>

    <div id="links">
        <a href="home.php">Home</a>
        <a href="contact.php">Contact</a>
        <?php if(isset($_SESSION['user_id'])){ ?>
            <a class="link" href="add-to-favorite.php" style="text-decoration:none">My Favorite Movies</a>
            <a class="link" href="logout.php" style="text-decoration:none">Logout</a>
        <?php }else{ ?>
        <a class="link" href="login.php" style="text-decoration:none">Login</a>
        <?php } ?>
    </div>                      
</header>
   