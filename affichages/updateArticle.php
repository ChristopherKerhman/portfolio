<?php
include 'securite/checkSecurite.php';
require 'objets/presentation/getPresentation.php';
require 'objets/presentation/printPresentation.php';
$liste = new PrintPresentation();
$dataTraiter = $liste->liste();

 ?>
<article>
  <?php $liste->printListe($dataTraiter, $this->idNav); ?>
</article>
