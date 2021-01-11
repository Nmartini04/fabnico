<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include_once 'includes/head.php'; ?>
    <link rel="stylesheet" href="assets/css/contact.css">

</head>

<body>
    <header class="container-fluid">
        <?php include_once 'includes/header.php'; ?>
    </header>





    <main class="container">


        <!--Section: Contact v.2-->
        <section class="mb-4">

            <!--Section heading-->
            <h2 class=" text-center my-4 pt-5 ct">Contactez moi</h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5 sendt">Vous voulez prendre rdv , envoyez moi un mail et je vous recontacte au plus vite.</p>

            <div class="row">

                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="models/mail_model.php" method="POST">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label for="name" class="">Nom</label>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control">
                                    <label for="email" class="">Email</label>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" class="form-control">
                                    <label for="subject" class="">Sujet</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                    <label for="message">Votre message</label>
                                </div>

                            </div>
                        </div>
                        <!--Grid row-->

                    </form>

                    <div class="text-center text-md-left">
                        <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Envoyer</a>
                    </div>
                    <div class="status"></div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-3 text-center">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x "></i>
                            <p class="sendt">Noves</p>
                        </li>

                        <li><i class="fas fa-phone mt-4 fa-2x "></i>
                            <p class="sendt">06 00 00 00 00</p>
                        </li>

                        <li><i class="fas fa-envelope mt-4 fa-2x "></i>
                            <p class="sendt">sophiebachevalier@gmail.com</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

            </div>

        </section>
        <!--Section: Contact v.2-->
        <div class="container d-flex pt-5 padb">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46029.12218728621!2d4.866812263268292!3d43.85955654124403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b5f03c3353acab%3A0x40819a5fd970170!2s13550%20Noves!5e0!3m2!1sfr!2sfr!4v1604493193077!5m2!1sfr!2sfr" width="1100" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

    </main>


























    <footer>
        <?php include_once 'includes/footer.php'; ?>
    </footer>




</body>

</html>