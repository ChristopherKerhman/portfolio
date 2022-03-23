<?php
session_start();
// Paramètre des chemins
require 'path.php';
//header
include $chemin.'head.php';
//header + navigation
include $chemin.'nav.php';
// Corps de la page
include $chemin.'main.php';
// Pied de la page
include $chemin.'foot.php';
 ?>
