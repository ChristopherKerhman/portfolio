<?php
session_start();
// Paramètre des chemins
require 'path.php';
// Navigation interne
if (isset($_GET['idNav'])) {
  $idNav = filter($_GET['idNav']);
} else {
  $idNav = 11;
}
//header
include $chemin.'head.php';
//header + navigation

include $chemin.'nav.php';
// Corps de la page
include $chemin.'main.php';
// Pied de la page
include $chemin.'foot.php';

 ?>
