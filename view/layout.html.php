<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo $title; ?></title>

        <!-- CSS FILES -->    
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />                   
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/tooplate-crispy-kitchen.css" rel="stylesheet">
        
<!--

Tooplate 2129 Crispy Kitchen

https://www.tooplate.com/view/2129-crispy-kitchen

-->
    </head>
    
    <body>
       <nav class="navbar navbar-expand-lg bg-white shadow-lg">
        <?php 
        if (isset($_SESSION['login']) && $_SESSION['login'] === 'admin') {
            include "view/admin/navbarAdmin.html.php";
        } elseif (isset($_SESSION['login']) && $_SESSION['login'] === 'user') {
         
            include "view/user/navbarUser.html.php";
        } else {
            include "view/navbar.html.php";
        }

    
        
        ?>
   
       </nav>

       
        <main>
    <?php

    if(isset($page)){
    include $page.".html.php";
    }else{
        include "pageNotFound.html.php";
    }   
    ?>
            

        <footer class="site-footer section-padding">
            
            <?php include "view/footer.html.php"; ?>
             
        </footer>



         
       
        <!-- Modal -->
     

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/script.js"></script>
   
    </body>
</html>
<?php


?>