<?php
class PrintPresentation extends GetPresentation {
  public function printListe ($data, $idNav) {
    echo '<table>
      <tr>
        <th>Titre Menu</th>
        <th>Titre article</th>
        <th>Zone</th>
        <th>Modifier</th>
        <th>Delette</th>
        <th>Visualiser</th>
      </tr>';
      foreach ($data as $key => $value) {
        echo
        '<tr>
          <td>'.$value['titreMenu'].'</td>
          <td>'.$value['titre'].'</td>
          <td>'.$this->adressage[$value['adresse']].'</td>
          <td><a class="boutonNav" href="index.php?idNav=15&idPresentation='.$value['idPresentation'].'">Modifier</a></td>
          <td><form action="RCUD/Delette/article.php" method="post">
            <input type="hidden" name="idPresentation" value="'.$value['idPresentation'].'" />
            <button class="boutonNav" type="submit" name="button" value="'.$idNav.'" >Del</button>
          </form></td>
          <td><a class="boutonNav" href="index.php?idNav=16&idPresentation='.$value['idPresentation'].'">Visualiser</a></td>
        </tr>';
      }
      echo '</table>';
  }
  public function printArticleModication ($data, $idNav){
    echo '<h3>Ajouter la présentation</h3>
     <form class="colonne" action="RCUD/Update/article.php" method="post">
       <label for="titreMenu">Titre du nouveau menu</label>
         <input id="titreMenu" type="text" name="titreMenu" value="'.$data[0]['titreMenu'].'" required>
     <div>
       <label for="titre">Titre de votre présentation</label>
         <input id="titre" type="text" name="titre" value="'.$data[0]['titre'].'" required>
         <label for="adresse">Cette élément est :</label>
         <select id="adresse" name="adresse">';
           for ($i=0; $i < count($this->adressage ) ; $i++) {
             if ($i == $data[0]['adresse']) {
               echo '<option value="'.$i.'" selected>'.$this->adressage [$i].'</option>';
             } else {
            echo '<option value="'.$i.'">'.$this->adressage [$i].'</option>';
             }
           }
         echo'</select>
     </div>
       <label for="texte">Votre présentation / Accepte les balises HTML</label>
        <textarea id="texte" name="texte" rows="20" cols="160" required>'.$data[0]['texte'].'"</textarea>
        <input type="hidden" name="idPresentation" value="'.$data[0]['idPresentation'].'" />
       <button class="boutonNav" type="submit" name="button" value="'.$idNav.'">Modifier</button>
     </form>';
  }
  public function printArticle($data){
    echo '<h3>'.$data[0]['titre'].'</h3>';
    echo '<article>'.$data[0]['texte'].'</article>';
  }
}
?>
