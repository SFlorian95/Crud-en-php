<?php
include("inc/projetCrudHead.inc.php");

$result = $mysqli->query("SELECT * FROM agence");

      if(!empty($_POST['idAgence'])){
       $result2 = $mysqli->query("DELETE FROM agence WHERE idAgence = $_POST[idAgence]");
       if ($result2=1) {     
      ?>

      <div class="alert alert-success" role="alert">Demande supprimée<br><a href="agence.php">Veuillez Réactualiser</a></div>
      
      <?php
       } else {
          ?>

          <div class="alert alert-danger" role="alert">Erreur lors de la suppression</div>

       <?php
          }
      }
      
          ?>



<!--Tableau-->
<div class="container" style="margin-top: 100px">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">idAgence</th>
      <th scope="col">nom</th>
      <th scope="col">adresse</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>

  <?php
while($agence = $result->fetch_assoc()) {
    ?>

  <tbody>
    <tr>
      <td><?php echo $agence['idAgence'] ?></td>
      <td><?php echo $agence['nom'] ?></td>
      <td><?php echo $agence['adresse'] ?></td>

      <td>
      <!-- Button DELETE -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Sup">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="Sup" tabindex="-1" role="dialog" aria-labelledby="SupLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    
      <div class="modal-header">
        <h5 class="modal-title" id="Delete">Confirmation de Suppression</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Êtes vous sûre de vouloir suppprimer cet élément ?
      </div>
      <!--Form pour DELETE--> 

      <div class="modal-footer">
      <form method='POST' action="">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
        
        <input type="hidden" name="idAgence" value="<?php echo $agence['idAgence'] ?>"></input>
        <button type="submit" class="btn btn-danger">Oui</button>
      </form> 
      </div>

    </div>
  </div>
</div>
      </td>

    </tr>
    <?php
}
?>
  </tbody>
</table>
</div>

<!-- Button AJOUTER -->
<div class="container">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Ajout">
  Ajouter
</button>
</div>
<!-- Modal -->
<div class="modal fade" id="Ajout" tabindex="-1" role="dialog" aria-labelledby="AjoutLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Add">Ajouter un élément au tableau</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

      <?php
      //Resolve : Erreur Undefined variable et index
      //$nom = 'testNom';
      //$adresse = 'testAdresse';    
         ?>

      <!--Form pour AJOUTER-->
        
      <form method="post" action="affichage.php">
  <div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" class="form-control" name="nom" id="nom" placeholder="nom">
  </div>
  <div class="form-group">
    <label for="adresse">Adresse</label>
    <input type="text" class="form-control" name="adresse" id="adresse" placeholder="adresse">
  </div>
  <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>

    </div>
  </div>
</div>

</body>
      </html>
