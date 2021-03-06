<?php
class AffichagePage {
  public $idNav;
  public function __construct ($idNav) {
    $this->idNav = $idNav;
  }
  public function getPrintPage () {
    $selectNav = "SELECT `cheminNav`, `levelAdmi` FROM `nav` WHERE `idNav` = :idNav";
    $param = [['prep'=>':idNav', 'variable'=> $this->idNav]];
    $readNav = new readDB($selectNav, $param);
    $data = $readNav->read();
    if($data == []) {
      include 'affichages/error.php';
    } else {
      //Debug mode Mode débug On = true Mode debug off = false
      $debug = false;
      if($debug) {
        echo $data[0]['cheminNav'];
      }
      //Fin du mode debug
      include $data[0]['cheminNav'];
    }

  }
}
