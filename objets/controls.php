<?php
class Controle {
  public function doublon($sql, $preparation , $valeur) {
    /* $sql doit être une requette sql, $préparation doit prendre
    la forme :preparation et $valeur c'est la valeur du doublon à tester.*/
    $param = $param = [['prep'=>$preparation, 'variable'=>$valeur]];
    $controle = new readDB($sql, $param);
    $test = $controle->read();
    $preparation = trim($preparation, ':');
    if (empty($test[0][$preparation])) {
      $test =  0;
    } else {
      $test = 1;
    }
      return $test;
  }
  public function idOk($tokenId, $idUser) {
    // Identification par double vérification Token + IdAdmin
    $param = [['prep'=>':token', 'variable'=>$tokenId],
    ['prep'=>':idAdmin', 'variable'=>$idUser]];
    $countNbrToken = "SELECT COUNT(`idAdmin`) AS `nbr` FROM `administration` WHERE `token` = :token AND `idAdmin` = :idAdmin";
    $controle = new readDB($countNbrToken, $param);
    $test = $controle->read();
    return  $test[0]['nbr'];
  }
}
