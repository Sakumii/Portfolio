<?php 
require_once ('_config/database.php');
?>


<!DOCTYPE html>
<html>
    <head>
        <!-- Head Link -->
        <?php
        require_once ('_head/meta.php');
        require_once ('_head/link.php'); 
        ?>
    </head>
    <body>
        
    <!-- Header -->
    <header>
        <?php require_once ('_src/php/navbar.php') ?>
    </header>
    
    <main>
        <?php require_once ('_src/php/about.php'); ?>
    </main>
    
    
    <footer class="footer">
        <?php require_once ('_src/php/footer.php') ?>
    </footer>

        <!-- Script Bootstrap -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>