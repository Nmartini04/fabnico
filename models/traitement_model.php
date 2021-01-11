<?php

require_once 'bdd_model.php';


$sql = "SELECT * FROM prestations WHERE style = 'traitements'";

$stmt = $bdd->query($sql);
$coiffure = $stmt->fetchAll();


