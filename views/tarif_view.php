<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include_once 'includes/head.php'; ?>
    <link rel="stylesheet" href="assets/css/price.css">
</head>

<body>
    <header class="container-fluid">
        <?php include_once 'includes/header.php'; ?>
    </header>

    <main class="container-fluid deux">


        <div class="container backg text-center pad">

            <div>
                <h3 class="title ">Styliste</h3>
            </div>
            <?php require_once 'models/styliste_model.php';?>
            <?php foreach ($coiffure as $c) { ?>

                <div class="item ">
                    <div><?= $c['nom'] ?></div>
                    <span class="dotted"></span>
                    <div><?= $c['prix'] ?></div>
                </div>

            <?php } ?>


        </div>

        <div class="container backg pt-5">
            <div>
                <h3 class="title ">Coloriste</h3>
            </div>
            <?php require_once 'models/coloriste_model.php';?>
            <?php foreach ($coiffure as $c) { ?>

                <div class="item ">
                    <div><?= $c['nom'] ?></div>
                    <span class="dotted"></span>
                    <div><?= $c['prix'] ?></div>
                </div>

            <?php } ?>

        </div>

        <div class="container backg pt-5">
            <div>
                <h3 class="title">Traitements</h3>
            </div>
            <?php require_once 'models/traitement_model.php';?>
            <?php foreach ($coiffure as $c) { ?>

                <div class="item ">
                    <div><?= $c['nom'] ?></div>
                    <span class="dotted"></span>
                    <div><?= $c['prix'] ?></div>
                </div>

            <?php } ?>
        </div>

        <div class="container backg text-center pb-5 pt-5">
            <div>
                <h3 class="title">Evènements</h3>
            </div>
            <?php require_once 'models/evenement_model.php';?>
            <?php foreach ($coiffure as $c) { ?>

                <div class="item ">
                    <div><?= $c['nom'] ?></div>
                    <span class="dotted"></span>
                    <div><?= $c['prix'] ?></div>
                </div>

            <?php } ?>
            <p class="cl">*Shampooing et soins inclus</p>
            <p class="cl">*Tout achat de 5 même services sera suivi d'un 6ème offert</p>
        </div>
    </main>
















    <footer>
        <?php include_once 'includes/footer.php'; ?>
    </footer>




</body>

</html>