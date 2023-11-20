<section class="contact section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-4">Registra il tuo Account</h2>
                        </div>

                        <div class="col-lg-6 col-12">
                            <form class="custom-form contact-form row" action="loginController.php" method="post" role="form">
                                <div class="col-lg-6 col-6">
                                    <input type="hidden" name="action" value="registrazione">
                                    <label for="contact-name" class="form-label">Nome</label>

                                    <input type="text" name="nome" id="contact-name" class="form-control" placeholder="Inserisci il tuo nome" required>
                                </div>

                                <div class="col-lg-12 col-6">
                                    <label for="contact-phone" class="form-label">Email</label>
                                    <input type="email" name="email" id="contact-phone" class="form-control" placeholder="Inserisci la tua email">
                                </div>

                                
                                    <div class="col-lg-6 col-6">
                                    <label for="formFile" class="form-label">Numero di Telefono</label>
                                    <input type="phone" name="phone" id="phone" class="form-control" placeholder="Inserisci i tuo numero di telefono">

                                    <div class="col-lg-12 col-6">
                                    <label for="contact-name" class="form-label">Username</label>
                                    <input type="text" name="username" id="contact-name" class="form-control" placeholder="Crea il tuo username" required>
                                    <label for="contact-name" class="form-label">Password</label>

                                    <input type="password" name="password" id="contact-name" class="form-control" placeholder="Crea la tua password" required>
                                    <input type="hidden" name="role" value="user">
                                </div>
                               
                                <div class="col-lg-12 col-12 ms-auto mt-4">
                                    <button type="submit" class="form-control">Registrati</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>
