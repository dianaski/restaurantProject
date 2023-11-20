<section class="contact section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-4">Aggiungi un nuovo Piatto</h2>
                        </div>

                        <div class="col-lg-6 col-12">
                            <form class="custom-form contact-form row" action="piattoController.php" method="post" role="form" enctype="multipart/form-data">
                                <div class="col-lg-6 col-6">
                                    <input type="hidden" name="action" value="insertPiatto">
                                    <label for="contact-name" class="form-label">Nome Piatto</label>

                                    <input type="text" name="nomePiatto" id="contact-name" class="form-control" placeholder="Inserisci nome piatto" required>
                                </div>

                                <div class="col-lg-6 col-6">
                                    <label for="contact-phone" class="form-label">Prezzo</label>

                                    <input type="number" name="prezzo" id="contact-phone" class="form-control" placeholder="Inserisci prezzo">
                                </div>

                                <div class="col-lg-6 col-6">
                                    <label for="contact-phone" class="form-label">Categoria</label>
                                    <select class="form-select" name="nomeCategoria">
                                        <?php
                                        foreach($categoria as $cat){?>
                                        <option value="<?php echo $cat->getId(); ?>"><?php echo $cat->getCategoriaC()?></option>

                                       <?php  } ?>
                                       
                                    </select>
                                    </div>

                                    <div class="col-lg-6 col-6">
                                    <label for="formFile" class="form-label">Carica immagine</label>
                                    <input class="form-control" type="file" id="formFile" name="fileToUpload">
                                    </div>
                                <div class="col-lg-8 col-12 ms-auto mt-4">
                                    <button type="submit" class="form-control">Aggiungi Piatto</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>
