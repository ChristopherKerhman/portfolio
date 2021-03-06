<?php
class GetMenuNav {
  public function triMenu($level) {
    $sql = "SELECT `idNav`, `nomLien` FROM `nav` WHERE `valide` = 1 AND `levelAdmi` = :levelAdmi ORDER BY `ordre`";
    $param = [['prep'=>':levelAdmi', 'variable'=> $level]];
    $read = new readDB($sql, $param);
    $data = $read->read();
    return $data;
  }
  public function triPresentation() {
    $sql = "SELECT `idPresentation`, `titreMenu` FROM `presentation` WHERE `valide` = 1 ORDER BY `titreMenu` ";
    $param = [];
    $read = new readDB($sql, $param);
    $data = $read->read();
    return $data;
  }
}
