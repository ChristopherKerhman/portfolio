<?php include 'securite/checkSecurite.php'; ?>
<h3>Ajouter la présentation</h3>
 <form class="colonne" action="RCUD/Create/addArticle.php" method="post">
   <label for="titreMenu">Titre du nouveau menu</label>
     <input id="titreMenu" type="text" name="titreMenu" required>
 <div>
   <label for="titre">Titre de votre présentation</label>
     <input id="titre" type="text" name="titre" required>
     <label for="adresse">Cette élément est :</label>
     <select id="adresse" name="adresse">
       <?php
       $adressage = ['Presentation', 'Curiculum vitae', 'Projet web'];
         for ($i=0; $i < count($adressage) ; $i++) {
           echo '<option value="'.$i.'">'.$adressage[$i].'</option>';
         }
        ?>
     </select>
 </div>
   <label for="texte">Votre présentation / Accepte les balises HTML</label>
           <textarea id="texte" name="texte" rows="20" cols="160" required></textarea>
   <button class="boutonNav" type="submit" name="button" value="<?=$this->idNav?>">Enregistrer</button>
 </form>
