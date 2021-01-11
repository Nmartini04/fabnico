<?php require 'models/connexion_model.php';?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include_once 'includes/head.php'; ?>
</head>


    <header class="container-fluid">
        <?php include_once 'includes/header.php'; ?>
    </header>
<p></p>
<body id="page-top">
    


    <!-- Contact Section-->
    <section class="page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Connexion</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Form-->
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                    <form id="contactForm" name="sentMessage" novalidate="novalidate" method="POST" action="models/connexion_model.php">

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Utilisateur</label>
                                <input class="form-control"  type="email" name="user" placeholder="" required="required" data-validation-required-message="entrer un email" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Mot de passe</label>
                                <input class="form-control"  name="password" type="password" placeholder="mot de passe" required="required" data-validation-required-message="entrer un mot de passe" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                        <br />
                        <div id="success"></div>
                        <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit" name="connexion">Connexion</button></div>
                        <?php echo $_SESSION['message']; ?>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>