<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function dbg($x)
{
    echo '<pre>';
    print_r($x);
    echo '</pre>';
    echo '<hr>';
}


require 'bdd_model.php';

$code = secure($_POST['id'], $bdd);
$nom = secure($_POST['titre'],$bdd);
$description = secure($_POST['description'],$bdd);
$nomPhoto = $_FILES['image']['name'];
$fichierTemp = $_FILES['image']['tmp_name'];


$upload = false;
if (file_exists($fichierTemp)) {

    $upload = move_uploaded_file($fichierTemp, '../assets/img/' . $nomPhoto);
    
}

$sql = "UPDATE images SET titre = $nom, description = $description , image = " . $image = ($upload ? $bdd->quote($nomPhoto) : 'image') . " WHERE id = $code";
$bdd->query($sql);

header('location: ../accueil');