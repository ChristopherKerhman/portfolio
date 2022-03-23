<?php
class PrintMenuNav extends GetMenuNav {
  public function  affichageMenu ($data) {
    echo '<ul class="navigation">';
    foreach ($data as $key => $value) {
      echo '<li><a class="boutonNav" href="index.php?idNav='.$value['idNav'].'">'.$value['nomLien'].'</a></li>';
    }
    echo '</ul>';
  }
}
