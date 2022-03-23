<main class="style">
<?php
require $objet.'navigation/affichagePage.php';
// Récupération de idNav
if (isset($_GET['idNav'])) {
  $idNav = filter($_GET['idNav']);
} else {
  $idNav = 11;
}
$printPage = new AffichagePage($idNav);
$printPage->getPrintPage();
 ?>
</main>
