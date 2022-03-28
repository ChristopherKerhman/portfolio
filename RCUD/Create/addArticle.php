<?php
// Element d'entête pour le traitement des requettes.
include '../commun.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
// Test champs vide
$ok = champsVide($_POST);
if ($ok == 0) {
  // Retire le parametre de navigation
  array_pop($_POST);
  // Préparation de la requette
  $sql = "INSERT INTO `presentation`(`titreMenu`, `titre`, `adresse`, `texte`, `id_Auteur` ) VALUES ( :titreMenu, :titre, :adresse, :texte, :idAdmin)";
  $requette = new Preparation();
  $param = $requette->creationPrepIdUserText ($_POST);
  //Insertion dans la DB
  $recordToken = new CurDB($sql, $param);
  $recordToken->actionDB();
  header('location:../../index.php?idNav=14&message=Texte enregistré.');
} else {
  header('location:../../index.php?message=Un champs est vide.');
}

} else {
    header('location:../../index.php?message=Il y a comme un lézard numérique.');
}
