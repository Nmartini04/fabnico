<?php

require_once 'bdd_model.php';


$sql = "SELECT * FROM prestations WHERE style = 'coloriste'";

$stmt = $bdd->query($sql);
$coiffure = $stmt->fetchAll();


