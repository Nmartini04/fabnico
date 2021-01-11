<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include_once 'includes/head.php'; ?>

</head>

<body>
    <header class="container-fluid">
        <?php include_once 'includes/header.php'; ?>
    </header>




    <main class="container-fluid d-flex justify-content-center align-items-center flex-wrap pt-5 pb-5 marg">

        
        <?php require_once 'models/image_model.php'; ?>
                <?php foreach ($image as $img) { ?>
            <div class="tile">
                
                <img src="assets/img/<?= $img['image'] ?>" alt="">
                <div class="text">
                    <h2 class="animate-text"><?= $img['titre'] ?></h2>
                    <p class="animate-text"><?= $img['description'] ?></p>
                    <div class="dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                
            </div>
            <button class="mod"><a href="modif?id=<?= $img['id'] ?>">Modifier</a></button>
        <?php } ?>


    </main>



    <footer>
        <?php include_once 'includes/footer.php'; ?>
    </footer>




</body>
<link rel="stylesheet" href="assets/css/realisation.css">
</html>