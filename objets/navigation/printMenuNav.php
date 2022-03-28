<?php
class PrintMenuNav extends GetMenuNav {
  public function  affichageMenu ($data1, $data2) {
    echo '<ul class="navigation">';
    foreach ($data1 as $key => $value) {
      echo '<li><a class="boutonNav" href="index.php?idNav='.$value['idNav'].'">'.$value['nomLien'].'</a></li>';
    }
    foreach ($data2 as $key => $value) {
    echo '<li><a class="boutonNav" href="index.php?idNav=16&idPresentation='.$value['idPresentation'].'">'.$value['titreMenu'].'</a></li>';
    }
    echo '<li><a class="boutonNav" href="librairie/CV-Calmes.pdf">Télécharger mon CV</a></li>';

    echo '</ul>';
  }
}
