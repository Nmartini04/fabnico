<?php
function connectdb()
{
    // Connexion à la BDD
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=coiffure;charset=utf8', 'root', '');
        return $bdd;
    }
    // Si la connexion ne se fait pas = message d'erreur
    catch (Exception $e) {
        die('Connexion impossible...');
    }
}


$bdd = connectdb();
session_start();

function secure($post, $bdd){
    return htmlentities($bdd->quote($post));
}