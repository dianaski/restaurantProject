<style>
    .card{
        position: absolute;
        background: transparent;
        border: none;
        right: 20px;
        top: 15px;
        /* margin-top: -30px; */
    }

    .edit{
        background: transparent;
        border: none;
        margin-left: 10px;
        margin-top: 5px;
    }

    .edit:hover{
        color: #f3af24;
    }

    .hide{
        display: none;
    }

 
</style>

                       
         

                        <!-- PIATTO -->
                            <div class="col-lg-4 col-md-6 col-12">
                            <div class="menu-thumb">
                                <img src="images/<?php echo $imgPiatto; ?>" class="img-fluid menu-image" alt="">

                                <div class="menu-info d-flex flex-wrap align-items-center">
                                    <h4 class="mb-0"><?php echo $nomePiatto; ?></h4>
                                    <?php 
                                    if(isset($_SESSION['login']) && $_SESSION['login']==='admin'){?>
                                       
                                            <button class="edit" type="submit"><a href="updatePiatto.php?updateId=<?php echo $idPiatto; ?>"><i class="bi bi-pencil-square"></i></a></button>
                                   
                                    <?php } ?>
                                    
                                
                                    

                                    <span class="price-tag bg-white shadow-lg ms-4"><small>$</small><?php echo $prezzoPiatto; ?></span>
                                    <?php
                                        if(isset($_SESSION['login']) && $_SESSION['login']==='admin'){?>
                                            <form action="piattoController.php" method="post">
                                                <input type="hidden" name="action" value="deletePiatto">
                                                <input type="hidden" name="piattoToDelete" value="<?php echo $idPiatto?>">
                                                <button class="card" type="submit"><div class="hide"><?php echo $idPiatto; ?></div><div class="price-tag bg-white shadow-lg ms-4"><i class="bi bi-trash"></i></div></button>
                                            </form>
                                      <?php }  ?>
                                  
                                      
                                    
                                    <div class="col-12">
                                        <h6 class="mb-lg-5 mb-4"><?php echo $categoria; ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>        
                      
      

       
