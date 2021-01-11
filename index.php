<?php
// inclusion des fichiers principaux


// definitiond de la page courante
if (isset($_GET['page']) and !empty($_GET['page'])) {

    $page = trim(strtolower($_GET['page'])); // enlever espace (trim) et majuscule (strtolower) 

} else {

    $page = 'accueil';

}

// array contenant toutes les pages , scandir scan tout ce qu'il y a dans le dossier controllers

$allpages = scandir('views/');


// si dans le tableau il ya les bonnes pages alors on inclus tout sinon erreur 404
if(in_array($page.'_view.php', $allpages)){

    // inclusion de la page

    // include_once 'controllers/'.$page.'_controller.php';
    include_once 'views/'.$page.'_view.php';


} else {

    // retour d'une erreur
    echo 'Erreur 404';

}