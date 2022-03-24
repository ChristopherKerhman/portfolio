<main class="style">
<?php
require $objet.'navigation/affichagePage.php';
// Récupération de idNav
$printPage = new AffichagePage($idNav);
$printPage->getPrintPage();
 ?>
</main>
