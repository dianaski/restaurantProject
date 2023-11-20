<header class="site-header site-menu-header">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 mx-auto">
                            <h1 class="text-white">Our Menus</h1>

                            <strong class="text-white">Perfect for all Breakfast, Lunch and Dinner</strong><br>
                            <?php if(isset($_SESSION['login']) && $_SESSION['login']=='admin') {?>
                                <h4 class="text-white mt-3">Aggiungi nuovo Piatto 
                                    <a href="addPiatto.php"><i class="fa-solid fa-utensils iconAdd"></i></a></h4>
                                    <h4 class="text-white mt-3">Aggiungi nuovo Categoria
                                    <a href="addcategoria.php"><i class="bi bi-chevron-right iconAdd"></i></a></h4>

                            <?php } ?>
                           

                        </div>

                    </div>
                </div>

                <div class="overlay"></div>
            </header>

            <section class="menu section-padding">
           
                <div class="container">
                    <div class="row"> 

<?php


   
    foreach ($piatto as $p) {

        $idPiatto= $p->getId();
        $nomePiatto = $p->getNome();
        $prezzoPiatto = $p->getPrezzo();
        $imgPiatto = $p->getLocandina();
        $categoria= $p->getCategoria();
        include "view/cardPiatti.html.php";  
    } ?>

</div>
                </div>

             </section>  

