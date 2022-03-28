<?php
class Preparation {
  public function creationPrep ($data) {
    foreach ($data as $key => $value) {
      $prepare = array();
      foreach ($data as $key => $value) {
        $value = filter($value);
        array_push($prepare, ['prep' => ':'.$key, 'variable' => $value]);
      }
    }
    return $prepare;
  }
  public function creationPrepTexte ($data) {
    foreach ($data as $key => $value) {
      $prepare = array();
      foreach ($data as $key => $value) {
        $value = filterTexte($value);
        array_push($prepare, ['prep' => ':'.$key, 'variable' => $value]);
      }
    }
    return $prepare;
  }
  public function creationPrepIdUser ($data) {
    foreach ($data as $key => $value) {
      $prepare = array();
      foreach ($data as $key => $value) {
        $value = filter($value);
        array_push($prepare, ['prep' => ':'.$key, 'variable' => $value]);
      }
    }
      array_push($prepare, ['prep' => ':idAdmin', 'variable' => $_SESSION['idAdmin']]);
      return $prepare;
  }
  public function creationPrepIdUserText ($data) {
    foreach ($data as $key => $value) {
      $prepare = array();
      foreach ($data as $key => $value) {
        $value = filterTexte($value);
        array_push($prepare, ['prep' => ':'.$key, 'variable' => $value]);
      }
    }
      array_push($prepare, ['prep' => ':idAdmin', 'variable' => $_SESSION['idAdmin']]);
      return $prepare;
  }
}
