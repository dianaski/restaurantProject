
<style>
    .hide{
        display: none;
    }
button{
    border: none;
    background: transparent;
}
    .bi{
        cursor: pointer;
    }

    .bi:hover{
        color: #d13a28;
    }
</style>

<section class="contact section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-4">Aggiungi nuova categoria</h2>
                        </div>

                        <div class="col-lg-6 col-12">
                            <form class="custom-form contact-form row" action="categoriaController.php" method="post" role="form">
                            <input type="hidden" name="action" value="insertCategoria">
                                <div class="col-lg-6 col-6">
                                    
                                    <label for="contact-name" class="form-label">Categoria</label>
                                    <input type="text" name="nomeCategoria"  class="form-control" placeholder="Nuova categoria" required>
                                </div>

                                <div class="col-lg-6 col-6">
                                    <label for="contact-phone" class="form-label">Numerazione</label>

                                    <input type="number" name="numerazioneCategoria" id="contact-phone" class="form-control" placeholder="Scegli la numerzione">
                                </div>

                                <div class="col-lg-5 col-12 ms-auto mt-3">
                                    <button type="submit" class="form-control">Aggiungi Categoria</button>
                                </div>
                            </form>
                        </div>

                    </div>

                    <div class="col-12">
                            <h3 class="mb-4 mt-4">Ecco la lista delle tue categorie</h3>
                        </div>

                        <?php
                        foreach($categoria as $cat){
                            $id= $cat->getId();
                            $nome= $cat->getCategoriaC();
                            $numerazione= $cat->getNumerazione();?>

                            <form action="categoriaController.php" method="post">
                                <input type="hidden" name="action" value="deleteCategoria">
                                <input type="hidden" name="idToDelete" value="<?php echo $id ;?>" >
                                <div class="col-12 mt-1">
                                <h4 class="mb-lg-2 mb-2"><?php echo $numerazione; ?> - <?php echo $nome; ?> 
                                <button type="submit"><span class="hide"><?php echo $id ;?></span><i class="bi bi-trash"></i></button>
                                </h4>
                        </div>
                            </form>
                           
              
                        <?php }
                        ?>

                </div>
                
            </section>
