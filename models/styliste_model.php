<?php

require_once 'bdd_model.php';


$sql = "SELECT * FROM prestations WHERE style = 'styliste'";

$stmt = $bdd->query($sql);
$coiffure = $stmt->fetchAll();


