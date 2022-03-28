<?php
class GetPresentation {
  public $adressage;
  public function __construct() {
    $this->adressage =  ['Presentation', 'Curiculum vitae', 'Projet web'];
  }
  public function liste() {
    $sql = "SELECT `idPresentation`, `titreMenu`, `titre`, `adresse`
    FROM `presentation`
    WHERE `valide` = 1 ORDER BY `adresse`";
    $param = [];
    $readListe =  new readDB($sql, $param);
    return $readListe->read();
  }
  public function oneArticle($id) {
    $sql = "SELECT `idPresentation`, `titreMenu`, `titre`, `texte`, `adresse`
    FROM `presentation`
    WHERE `idPresentation` = :idPresentation AND `valide` = 1";
    $param = [['prep'=>':idPresentation', 'variable'=>$id]];
    $readArticle = new readDB($sql, $param);
    return $readArticle->read();

  }
}
