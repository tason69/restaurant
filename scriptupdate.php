
    <?php
    require 'vue/header.php';
     require 'vue/bdd.php';
  
     if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        header('Location: index.php');
    }

$reponse = $dbh-> query("SELECT * FROM recette WHERE id_recette = '" . $id . "'");
$donnees = $reponse->fetch();

?>
<form method="POST" action="formupdate.php">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
<h2>MODIFICATION</h2>
  <div class="form-group">
    <label for="nom">Nom de la recette</label>
    <input type="text" class="form-control" name="nom_recette" id="nom" value="<?php echo $donnees['nom_recette']; ?>" placeholder="nom de la recette" required>
  </div>
  <div class="form-group">
    <label for="nom">Temps de la recette</label>
    <input type="text" class="form-control" name="temps_recette" id="temps_recette" value="<?php echo $donnees['temps_recette']; ?>" placeholder="temps de la recette" required>
  </div>
  <div class="form-group">
    <label for="nom">Déscription de la recette</label>
    <input type="text" class="form-control" name="desc_recette" id="desc_recette" value="<?php echo $donnees['desc_recette']; ?>" placeholder="déscription de la recette" required>
  </div>
    <button type="submit" class="btn btn-primary">Modifier la recette</button>
</form>







<script src="js/jquery-3.4.1.js"></script>
<script src="js/tooltip.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>