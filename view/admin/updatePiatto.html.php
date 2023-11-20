<section class="contact section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-4">Modifica il Piatto</h2>
                        </div>

                        <div class="col-lg-6 col-12">
                            <form class="custom-form contact-form row" action="piattoController.php" method="post" role="form" enctype="multipart/form-data">
                                <div class="col-lg-6 col-6">
                                    <input type="hidden" name="id" value="<?php echo $id?>">
                                    <input type="hidden" name="action" value="updatePiatto">
                                    <label for="contact-name" class="form-label">Modifica il nome</label>

                                    <input type="text" name="newNomePiatto" id="contact-name" class="form-control" value="<?php echo $name; ?>" required>
                                </div>

                                <div class="col-lg-6 col-6">
                                    <label for="contact-phone" class="form-label">Nuovo Prezzo</label>

                                    <input type="number" name="newPrezzoPiatto" id="contact-phone" class="form-control" value="<?php echo $prezzo; ?>">
                                </div>

                                <div class="col-lg-6 col-6">
                                    <label for="contact-phone" class="form-label">Categoria</label>
                                    <select class="form-select" name="newNomeCategoria">
                                        <?php
                                        foreach($categoria as $cat){?>
                                        <option value="<?php echo $cat->getId(); ?>"><?php echo $cat->getCategoriaC()?></option>

                                       <?php  } ?>
                                       
                                    </select>
                                    </div>

                                   
                                <div class="col-lg-8 col-12 ms-auto mt-4">
                                    <button type="submit" class="form-control">Modifica il Piatto</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>
