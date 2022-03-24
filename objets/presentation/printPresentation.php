<?php
class PrintPresentation extends GetPresentation {
  public function printListe ($data) {
    echo '<table>
      <tr>
        <th>Titre Menu</th>
        <th>Titre article</th>
        <th>Zone</th>
        <th>Modifier</th>
      </tr>';
      foreach ($data as $key => $value) {
        echo
        '<tr>
          <td>'.$value['titreMenu'].'</td>
          <td>'.$value['titre'].'</td>
          <td>'.$this->adressage[$value['adresse']].'</td>
          <td>A venir</td>
        </tr>';
      }
      echo '</table>';
  }
}
