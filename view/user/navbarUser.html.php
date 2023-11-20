<style>
    .nomeUtente{
        font-weight: 600 !important;
        color: #c34a36 !important;
    }
 </style>
 
 <!-- NAVBAR -->




    <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <a class="navbar-brand" href="index.php">
                    Restaurant Project
                </a>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto ">
                  
                    
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="listaPiatti.php">Menu</a>
                        </li>

                        <div class="ml-auto">
                        <!-- <li class="nav-item"> -->
                            <form action="loginController.php" method="post">
                                <input type="hidden" name="action" value="logout">
                                <button type="submit" style="border:none; background:transparent;">
                                    <a class="nav-link" href="loginController.php"><i class="fa-solid fa-arrow-right-from-bracket"></i><a>
                                </button>
                                </form>
                        <!-- </li> -->
                        </div>
                    </ul>
               
                </div>
                    
                

        </div>





        
   
<!-- NAV END -->