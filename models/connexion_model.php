<?php

require_once 'bdd_model.php';

if (isset($_POST['connexion'])) {



    $user = htmlentities($bdd->quote($_POST['user'])); // securisation de la reception de données
    $password = $bdd->quote(md5($_POST['password'] . $SALT));

    $sql = "SELECT * FROM admin WHERE nom = $user AND mdp = $password";
    $result = $bdd->query($sql);

    if ($result->rowCount() > 0) //Si sup 0 un compte existe
    {
        $result = $result->fetch();
        $_SESSION["utilisateur"] = $result["id"];

        if($result['admin'] == 1){
            $_SESSION['admin'] = $result['id'];
        }

        header('location: ../accueil');

    } else {
        $_SESSION['message'] = "Identifiant ou mot de passe incorrect";
        header('location: ../connexion');
    }

}


?>