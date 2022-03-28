<?php
include '../commun.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  // Vérification qu'aucun champs n'est vide
  $ok = champsVide($_POST);
  if($ok == 0 ){
    // Récupération de la nav et on efface
    $idNav = filter($_POST['button']);
    array_pop($_POST);
    $requette = new Preparation();
    $param = $requette->creationPrep ($_POST);
    $sql = "DELETE FROM `presentation` WHERE `idPresentation` = :idPresentation";
    $action = new CurDB($sql, $param);
    $action->actionDB();
    header('location:../../index.php?idNav='.$idNav.'&message=Article effacé.');
  } else {
    header('location:../../index.php?message=Un champs est vide.');
  }

  } else {
    header('location:../../index.php?message=Il y a comme un lézard numérique.');
  }
