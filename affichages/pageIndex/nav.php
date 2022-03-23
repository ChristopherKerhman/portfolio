<?php
// Création d'un menu de navigation
require 'objets/navigation/getMenuNav.php';
require 'objets/navigation/printMenuNav.php';
$menu = new PrintMenuNav();
 ?>
<div class="parallax-effect">
<header>
  <h1><?=$title?></h1>
  <h2><?=$title2?></h2>
<?php
  if(isset($_SESSION['admin']) && ($_SESSION['admin'])) {
    $dataMenu = $menu->triMenu(1);
    $menu-> affichageMenu ($dataMenu);
  } else {
    $dataMenu = $menu->triMenu(0);
    $menu-> affichageMenu ($dataMenu);
  }
 ?>

</header>
  </div>
