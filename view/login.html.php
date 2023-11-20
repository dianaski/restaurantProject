<section class="contact section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-4">Accedi al nostro sito</h2>
                        </div>

                        <div class="col-lg-6 col-12">
                            <form class="custom-form contact-form row" action="loginController.php" method="post" role="form">

                                <div class="col-12">
                                    <input type="hidden" name="action" value="login">
                                    <label for="contact-email" class="form-label">Username</label>

                                    <input type="text" name="username" id="username"  class="form-control" placeholder="Inserisci Username" required="">
                                    
                                    <label for="contact-email" class="form-label">Password</label>

                                    <input type="password" name="password" id="contact-email"  class="form-control" placeholder="Inserisci Password" required="">

                                </div>

                                <div class="col-lg-5 col-12 ms-auto">
                                    <button type="submit" name="submit" class="form-control">Accedi</button>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </section>