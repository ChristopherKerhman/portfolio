<?php
session_start();
include '../../path.php';
if($_SERVER['REQUEST_METHOD'] === 'POST') {
  //On stock les éléments login + mdp :
  $mdp = filter($_POST['mdp']);
  $login = filter($_POST['login']);
  $sql ="SELECT `idAdmin`, `login`, `mdp`, `valide` FROM `administration` WHERE `login` = :login";
  $param = [['prep'=>':login', 'variable'=>$login]];
  $traiter = new readDB($sql, $param);
  $dataTraiter = $traiter->read();
  if (password_verify($mdp, $dataTraiter[0]['mdp']) && ($dataTraiter[0]['valide'] == 1)) {
      $token = genToken(10);
      $_SESSION['idAdmin'] = $dataTraiter[0]['idAdmin'];
      $_SESSION['User'] = $dataTraiter[0]['login'];
      $_SESSION['admin'] = true;
      $_SESSION['role'] = $dataTraiter[0]['valide'];
      $_SESSION['connexionToken'] = $token;
      //Enregistrement du token de connexion unique
      $update = "UPDATE `administration` SET `token`= :token WHERE `idAdmin` = :idAdmin";
      $record = [['prep'=>':token', 'variable'=>$token],
                ['prep'=>':idAdmin', 'variable'=>  $dataTraiter[0]['idAdmin']]];
      $recordToken = new CurDB($update, $record);
      $recordToken->actionDB();
      header('location:../../index.php?message=Vous êtes connecté '.$_SESSION['User']);
  } else {
      header('location:../../index.php?message=Login ou mot de passe incorrecte.');
  }
} else {
  header('location:../../index.php?message=Il y a comme un lézard numérique.');
}
